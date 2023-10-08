<?php

use yii\db\Migration;


class m230927_080815_create_table_news extends Migration
{

    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'content' => $this ->text(),
            'status' => $this->integer(3),
        ]);
    }


    public function safeDown()
    {
        echo "m230927_080815_create_table_news cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230927_080815_create_table_news cannot be reverted.\n";

        return false;
    }
    */
}
