<?php
/**
 * Created by PhpStorm.
 * User: pugab
 * Date: 01/11/2018
 * Time: 02:20
 */

namespace common\models;


use yii\base\BaseObject;

class SendJob extends BaseObject implements \yii\queue\JobInterface
{
    public $mail_array;
    public function execute($queue)
    {
        $arr = $this->mail_array;
        foreach($arr as $recipient)
        {
            Mail::sendMail($recipient['email'], $recipient['pin']);
        }
    }
}