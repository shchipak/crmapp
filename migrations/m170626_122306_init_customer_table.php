<?php

use yii\db\Migration;

class m170626_122306_init_customer_table extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'customer',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string(),
                'birth_date' => $this->date(),
                'notes' => $this->text(),
            ],
            'ENGINE=InnoDB'
        );
    }

    public function safeDown()
    {
        echo "m170626_122306_init_customer_table cannot be reverted.\n";

        return false;
    }
}
