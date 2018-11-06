<?php
/**
 * Created by PhpStorm.
 * User: pugab
 * Date: 31/10/2018
 * Time: 18:58
 */

namespace common\models;


use yii\db\ActiveRecord;
use Yii;

class Mail extends ActiveRecord
{
    public $To;
    public $subject;
    public $time;
    public $time_level;

    public function __construct($time)
    {
        $this->time = $time;
        $this->time_level = $this->time;
    }
    public function makeQueueEmail($mail_array)
    {
        Yii::$app->queue->delay($this->time * 60)->push(new SendJob([
            'mail_array' => $mail_array,
        ]));
    }


    public function sendMail($recipient, $pin)
    {
        Yii::$app->mailer->compose('zenon_mail', [
            'pin' => $pin,
            'sale_pic' => '/app/sender-zen/common/mail/layouts/image/3tp_act.png',
            'logo' => '/app/sender-zen/common/mail/layouts/image/logo.png',
            'ico_hend' => '/app/sender-zen/common/mail/layouts/image/ico_hend.png',
            'ico_shield' => '/app/sender-zen/common/mail/layouts/image/ico_shield.png',
            'ico_symb' => '/app/sender-zen/common/mail/layouts/image/ico_symb.png'
        ])
            ->setTo($recipient)
            ->setSubject($this->subject)
            ->send();
    }
}