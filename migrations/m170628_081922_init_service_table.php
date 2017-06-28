<?php

use yii\db\Migration;

class m170628_081922_init_service_table extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'service',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string()->unique(),
                'hourly_rate' => $this->integer(),
                ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('services');
        echo "m170628_081922_init_service_table cannot be reverted.\n";
        return false;
    }

}
