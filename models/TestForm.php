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
		public $name;
		public $email;
		public $hash;
		
		
		
		public function rules(){
			return [
			[ ['name','email','hash'], 'required'],
			['email', 'email']
			];
		}
		
		
		
	}
