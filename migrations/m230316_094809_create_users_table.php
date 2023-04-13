<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m230316_094809_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'date_create' => $this->string(),
            'password' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
