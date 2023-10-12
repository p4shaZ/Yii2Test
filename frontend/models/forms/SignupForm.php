<?php

namespace frontend\models\forms;

use yii\base\Model;
use  frontend\models\User;
use Yii;
class SignupForm extends  Model
{
    public $username;
    public $email;
    public $password;


    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'string', 'max' => 100, 'min' => 2],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'string', 'max' => 100],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => User::className(), 'targetAttribute' => 'email'],


            ['password', 'required'],
            ['password' , 'string', 'min' => 6],
        ];
    }

    public function save()
    {
        if ($this-> validate()){
            if (User::find()->where(['username' => $this->username])->exists()) {
                $this->addError('username', 'This username is already taken. Please choose another.');
                return false;
            }

            $user = new User();
            $user->email = $this->email;
            $user->username = $this->username;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);


            return $user->save();

        }
        return false;
    }

}