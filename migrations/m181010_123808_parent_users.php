<?php
	
	use yii\db\Migration;
	
	/**
		* Class m181010_123808_parent_users
	*/
	class m181010_123808_parent_users extends Migration
	{
		/**
			* {@inheritdoc}
		*/
		public function safeUp()
		{
			
			$this->createTable(
            'parent_users',
            [
			'parent_id'                   => $this->primaryKey(),
			'pa_id'               => $this->integer(11)->notNull(),
			'child_id'               => $this->integer(11)->notNull(),
            ]
            , 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB'
			);
			
		}
		
		/**
			* {@inheritdoc}
		*/
		public function safeDown()
		{
			echo "m181010_123808_parent_users cannot be reverted.\n";
			
			return false;
		}
		
		/*
			// Use up()/down() to run migration code without a transaction.
			public function up()
			{
			
			}
			
			public function down()
			{
			echo "m181010_123808_parent_users cannot be reverted.\n";
			
			return false;
			}
		*/
	}
