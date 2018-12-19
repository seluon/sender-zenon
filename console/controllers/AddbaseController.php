<?php
/**
 * Created by PhpStorm.
 * User: pugab
 * Date: 19/12/2018
 * Time: 10:38
 */

namespace console\controllers;


use yii\console\Controller;

class AddbaseController extends Controller
{

    public function actionAddMailBase($pin, $email)
    {
        $model = new Recipient();
        $model->email = $email;
        $model->pin = $pin;
        $model->save();
    }

    public function actionAddMailFromFile($file)
    {
        $path = '/app/sender-zen/console/runtime/' . $file;
        $arr = file($path);

        foreach ($arr as $item) {
            $item = strtolower($item);
            $res[] = explode(" ", $item, 2);
        }

        foreach ($res as $key => $value)
        {
            $result[$value[0]] = explode(",", trim($value[1]));

        }

        foreach ($result as $pin => $email)
        {

            foreach ($email as $mail)
            {
                $search = Recipient::searchEmail($mail);
                if(!$search) {
                    $this->actionAddMailBase($pin, $mail);
                }
                continue;
            }
        }


    }
}