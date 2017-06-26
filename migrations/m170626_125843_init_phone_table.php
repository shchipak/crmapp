<?php

use yii\db\Migration;

class m170626_125843_init_phone_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('phone',
        [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer()->unique(),
            'number' => $this->string(),
        ],
        'ENGINE=InnoDB'
        );

        $this->addForeignKey('customer_phone_number', 'phone', 'customer_id', 'customer', 'id');
    }

    public function safeDown()
    {
        echo "m170626_125843_init_phone_table cannot be reverted.\n";
        return false;
    }


}
