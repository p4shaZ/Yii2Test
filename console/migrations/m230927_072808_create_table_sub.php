<?php

use yii\db\Migration;

/**
 * Class m230927_072808_create_table_sub
 */
class m230927_072808_create_table_sub extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql ="CREATE TABLE subscriber (id INT(11) AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255)UNIQUE )";
        Yii::$app->db->createCommand($sql)->execute();
    }

// {@inheritdoc}


    public function safeDown()
    {
        $sql = 'DROP TABLE subscriber';
        Yii::$app->db->createCommand($sql)->execute();
    }

}
