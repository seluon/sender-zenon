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

}