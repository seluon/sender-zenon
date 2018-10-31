<?php
/**
 * Created by PhpStorm.
 * User: pugab
 * Date: 31/10/2018
 * Time: 18:49
 */

namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\models\Mail;
use common\models\Recipient;

class MailController extends Controller
{

    public function actionSend()
    {
        $model = new Recipient();
        $mail = new Mail(2);
        for($i = 0; $i < $model->num_cycles; $i++)
        {
            $mail->makeQueueEmail($model->getArrayRecipient());
            $model->offset += $model->limit; // Смещение
            $mail->time += $mail->time_level;
        }
        $mail->makeQueueEmail($model->getArrayRecipient());
    }


    public function actionSendTest()
    {
        $mail_array = [
            'pugab@zenon.net'
        ];
        foreach ($mail_array as $recipient)
        {
            $result = Yii::$app->mailer->compose('mail_tpl', [
                'pin' => '745001',
                'sale_pic' => '/app/sender-zen/common/mail/layouts/image/3tp_act.png',
                'logo' => '/app/sender-zen/common/mail/layouts/image/logo.png',
                'ico_hend' => '/app/sender-zen/common/mail/layouts/image/ico_hend.png',
                'ico_shield' => '/app/sender-zen/common/mail/layouts/image/ico_shield.png',
                'ico_symb' => '/app/sender-zen/common/mail/layouts/image/ico_symb.png'
            ])
                ->setFrom(['lesom@zenon.net' => 'Хостинг-провайдер Зенон Н.С.П'])
                ->setTo($recipient)
                ->setSubject("Специальное осеннее предложение от хостинг-провайдер \"Зенон Н.С.П.\"")
                ->send();
            var_dump($result);
        }
    }
}