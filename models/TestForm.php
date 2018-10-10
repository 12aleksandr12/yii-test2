<?php
	
	namespace app\models;
	
	use Yii;
	use yii\base\Model;
	use yii\db\ActiveRecord;
	
	
	/**
		* ContactForm is the model behind the contact form.
	*/
	class TestForm extends ActiveRecord
	{
		
		public static function tableName(){
			return 'users';
		}
		
		public function rules(){
			return [
			[ ['name','email','hash'], 'required'],
			['email', 'email']
			];
		}
		
		
		
	}
