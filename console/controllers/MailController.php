<?php
/**
 * Created by PhpStorm.
 * User: pugab
 * Date: 31/10/2018
 * Time: 18:49
 */

namespace console\controllers;

use common\models\CheckMail;
use yii\console\Controller;
use common\models\Mail;
use common\models\Recipient;

class MailController extends Controller
{

    /* Отправка рассылки по емейлам из базы
    Задается лимит в $time
     */
    public function actionSend($time, $limit)
    {
        $model = new Recipient();

      /*  Устанавливает лимит писем за $time
        Значение из контроллера */
        $model->setLimitArray($limit);


        $mail = new Mail($time);
        for($i = 0; $i < $model->num_cycles; $i++)
        {
            /* Создается очередь получателей */
            $mail->makeQueueEmail($model->getArrayRecipient());

            $model->offset += $model->limit; // Смещение
            $mail->time += $mail->time_level; // Увелечение по времени
        }
        // Получаем последние emails и создаем очередь на отправку
        $mail->makeQueueEmail($model->getArrayRecipient());

    }



    /* Проверяет базу емейлов на валидность
    Емейлы должны резолвится(иметь hostname или MX)
    */
    public function actionCheck()
    {
        $all_email = Recipient::getAllEmail();
        print_r($all_email); $i = 0;

        foreach ($all_email as $mail)
        {
            $status = Recipient::getEmailStatus($mail);
            if(CheckMail::checkEmailRelay($mail))
            {
                $i++;
//                $status = Recipient::getEmailStatus($mail);
                echo "$mail => Валиден: Текущий статус: $status \n";

                if($status != 1)
                {
                    Recipient::setEmailStatusOn($mail);
                    echo "$mail Статус изменен на 1\n";
                }

            } else {
                echo $mail . " => Не валидный\n";
                if($status != 1)
                {
                    Recipient::setEmailStatusOn($mail);
                    echo "$mail Статус изменен на 1\n";
                }
                Recipient::setEmailStatusOff($mail);

            }

        }
        echo "Всего валидных email: $i\n";

    }

}