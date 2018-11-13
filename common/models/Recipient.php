<?php
/**
 * Created by PhpStorm.
 * User: pugab
 * Date: 01/11/2018
 * Time: 02:19
 */

namespace common\models;


use yii\db\ActiveRecord;

class Recipient extends ActiveRecord
{
    public $limit;
    public $offset;
    public $num_cycles;


    public function setLimitArray($limit)
    {
        $this->limit = $limit;
        $this->offset = 0;
        $this->num_cycles = intval((self::find()->count('*')) / $this->limit);
    }

    public function getArrayRecipient()
    {
        return self::find()->asArray()
            ->select(['email','pin'])
            ->where(['status' => 1])
            ->offset($this->offset)
            ->limit($this->limit)
            ->all();
    }

    public static function searchEmail($email)
    {
        $res = self::find()->where('email = :email', [':email' => $email])->one();
        if (isset($res)) {
            return true;
        }
    }

    public static function getAllEmail()
    {
        $query = self::find()->asArray()->select('email')->all();
        $arr = [];
        foreach ($query as $email)
        {
            $arr[] = $email['email'];
        }
        return $arr;
    }

    public static function getEmailStatus($email)
    {
        $query = self::find()
            ->asArray()
            ->select('status')
            ->where(['email' => $email])
            ->one();
        return $query['status'];

    }

    public static function setEmailStatusOff($email)
    {
        $query = self::find()->where(['email' => $email])->one();
        $query->status = 0;
        $query->save();

    }

    public static function setEmailStatusOn($email)
    {
        $query = self::find()->where(['email' => $email])->one();
        $query->status = 1;
        $query->save();

    }

}