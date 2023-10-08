<?php
namespace frontend\models;

use yii\base\Model;
use  Yii;
use yii\helpers\ArrayHelper;

class Employee extends Model {

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $firstName;
    public $lastName;
    public $middleName;
    public $email;
    public $salary;
    //New
    public $birthDate;
    public $hiringDate;
    public $city;
    public $position;
    public $idCode;
    // Define scenarios as a property, not a method
    public function scenarios(){
      return [
          self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName', 'city','email', 'position', 'idCode', 'birthDate', 'hiringDate'],
        self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }

    public function rules() {
        return [
            [['firstName', 'lastName', 'email', 'middleName', 'birthDate'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middleName'], 'required' , 'on' => self::SCENARIO_EMPLOYEE_UPDATE],

            //New
            [['birthDate','hiringDate'], 'date', 'format'=>'php:d-m-Y'],
            [['city'], 'string'],
            [['position'], 'string'],
            [['idCode'], 'string', 'length'=>5],
            [['hiringDate','position','idCode'], 'required', 'on'=> self::SCENARIO_EMPLOYEE_REGISTER],
        ];
    }

    public function save()
    {
        return true;
    }

    public function getCitiesList()
    {
            $sql = 'SELECT * FROM `city`';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return ArrayHelper::map($result, 'id', 'name');
    }
}