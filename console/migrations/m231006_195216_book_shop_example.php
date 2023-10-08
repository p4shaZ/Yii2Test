<?php

use yii\db\Migration;

/**
 * Class m231006_195216_book_shop_example
 */
class m231006_195216_book_shop_example extends Migration
{

    public function Up()
    {
        $this->createBooks();
        $this->createAuthors();
        $this->createBooksToAuthors();
        $this->createPublishers();
    }

    public function Down()
    {
        $this->dropTable('book');
        $this->dropTable('author');
        $this->dropTable('book_to_author');
        $this->dropTable('publisher');

    }
    private function createBooks(){

    }
    private function createAuthors(){

    }
    private function createBooksToAuthors(){

    }
    private function createPublishers(){

    }

}
