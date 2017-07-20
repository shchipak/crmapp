<?php

use yii\db\Migration;

class m170717_150421_add_auth_key extends Migration
{
    public function safeUp()
    {

        $this->addColumn('user', 'auth_key','string UNIQUE');

    }

    public function safeDown()
    {
        echo "m170717_150421_add_auth_key cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170717_150421_add_auth_key cannot be reverted.\n";

        return false;
    }
    */
}
