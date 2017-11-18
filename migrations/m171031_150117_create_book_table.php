<?php

use yii\db\Migration;

/**
 * Handles the creation of table `book`.
 */
class m171031_150117_create_book_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'image' => $this->string(),
            'author' => $this->string(255),
            'date' => $this->date(),
            'date_add' => $this->date(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('book');
    }
}
