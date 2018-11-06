<?php
/**
 * Created by PhpStorm.
 * User: pugab
 * Date: 03/11/2018
 * Time: 18:44
 */


Class CheckMail

{

    /* Содержит доменное
    имя почтового адреса */
    private $domian;

    /* Содержит почтовые сервера
    домена куда отсылается почта */
    private $serverMailRelayArray;

    private $result = false;


    public static function checkEmailRelay($email)
    {
        $check = new self();
        $check->getDomianName($email);

        /* Определяет, свойство serverMailRelayArray */
        if($check->checkDomianRecordMX())
        {
            $check->getMxRecord();
            $check->checkConnectServerMail();

        } else {
            if($check->checkDomianRecordA())
            {
                $check->getARecord();
                $check->checkConnectServerMail();
            }

        }

        return $check->result;

    }




    /* Отделяет домен от емейла */
    public function getDomianName($email)
    {
       $res = explode('@', $email);
        $this->domian = $res[1];
    }

    /* Проверяет есть ли у домена МХ записи */
    private function checkDomianRecordMX()
    {
       return checkdnsrr($this->domian, "MX");
    }

    /* Проверяет есть ли у домена A записи */
    private function checkDomianRecordA()
    {
        return checkdnsrr($this->domian, "A");
    }

    /* Резолвит МХ записи */
    private function getMxRecord()
    {
        $mx_relay = dns_get_record($this->domian, DNS_MX);

        /* Сортирует в массив MTA с приоритетом по возрастанию
        (согласно RFC, приоритет растет от < к > ) */
        $array = [];
        foreach ($mx_relay as $key => $value)
        {
            $array += [$value['pri'] => $value['target']];
        }
        ksort($array);
        $this->serverMailRelayArray = $array;

    }
    /* Резолвит А запись */
    private function getARecord()
    {
        $a_relay =  dns_get_record($this->domian, DNS_A);
        $array = [];
        foreach ($a_relay as $key => $value)
        {
            $array += [$value['class'] => $value['ip']];
        }
        $this->serverMailRelayArray = $array;
    }

    /* Проверяет принимающие сервера на доступность
    (до тех пор пока один из них не ответит 220)
     */
    private function checkConnectServerMail()
    {
        foreach ($this->serverMailRelayArray as $key => $value)
        {

            $conn = fsockopen($value, 25, $errno,$errstr, 5 );

            if($conn)
            {
                $get = fgets($conn, 256);
                if(substr($get, 0,3) =='220')
                {
                    fputs($conn, "QUIT\n");
                    $this->result = true;
                    break;
                }
            }

        }

    }

}

$a =  CheckMail::checkEmailRelay('lastovskiy56@gmail.com');
var_dump($a);







