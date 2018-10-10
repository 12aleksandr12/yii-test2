<?
	
	namespace app\models;
	
	use yii\db\ActiveRecord;
	
	
	class Yiitest extends ActiveRecord{
		
		public static function tableName(){
			return 'users';
		}
		
	}	