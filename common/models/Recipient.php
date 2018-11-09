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


    public function __construct()
    {
        $this->limit = 5;
        $this->offset = 0;
        $this->num_cycles = intval((self::find()->count('*')) / $this->limit);
    }

    public function getArrayRecipient()
    {
        return self::find()->asArray()
            ->select(['email','pin'])
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

}