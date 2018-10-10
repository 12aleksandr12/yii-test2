<?
	namespace app\controllers;
	//use app\controllers\AppController;
	use Yii;
	use app\models\TestForm;
	use app\models\Yiitest;
	
	
	class PostController extends AppController {
		
		public static function tableName(){
			return 'users';
		}
		public $layout = 'basic';
		
		
		public function actionIndex(){
			$model = new TestForm();
			
			
			if( $model->load( Yii::$app->request->post() ) ){
				
				//debugAll(Yii::$app->request->post()[TestForm]);
				
				//die;
				if( $model->save() ){
					Yii::$app->session->setFlash('success', 'Вы успешно зарегистрировались!');
					return $this->refresh();
					}else{
					Yii::$app->session->setFlash('error', 'Ошибка при отправке данных!');
					
				}
				
				
			}
			
			
			$users_data = Yiitest::find()->asArray()->where('id<5')->all();
			
			
			
			
			
			
			
			
			//print_r(Yii::$app);
			//$this->debug(Yii::$app);
			
			return $this->render('index', compact('model', 'users_data') );
			
		}
		
		public function actionShow(){
			//$this->layout = 'basic';
			
			return $this->render('show');
			
		}
		
		
	}	