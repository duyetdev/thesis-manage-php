<?php

class m160229_071123_create_user_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', array(
            'id' => 'pk',
            'username' => 'string NOT NULL',
            'password' => 'string NOT NULL',
            'email' => 'string NOT NULL',
            'profile' => 'text',
        ));
	}

	public function down()
	{
		$this->dropTable('users');
	}
}