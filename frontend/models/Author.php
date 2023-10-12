<?php

namespace frontend\models;

use yii\db\ActiveRecord;
class Author extends ActiveRecord
{
    public static function tableName()
    {
        return '{{Author}}';

    }

    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
            [['first_name', 'last_name'], 'string', 'max' => 40], // 'nam' в 'max'
            [['birthdate'], 'date', 'format' => 'php:Y-m-d'], // Убран лишний пробел
            [['reting'], 'integer'],
        ];
    }

}