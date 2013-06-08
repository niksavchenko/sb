<?php

class m130608_144406_add_index_to_confederations extends CDbMigration
{
	public function up()
	{
		$this->execute("ALTER TABLE `sb_a`.`a_fifa_confederations` DROP INDEX `abbreviation`, ADD UNIQUE `abbreviation` (`abbreviation`) ");
	}

	public function down()
	{
		//		echo "m130608_144406_add_index_to_confederations does not support migration down.\n";
		$this->execute("ALTER TABLE `sb_a`.`a_fifa_confederations` DROP INDEX `abbreviation`, ADD INDEX `abbreviation` ( `abbreviation` ) ");
		//return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}