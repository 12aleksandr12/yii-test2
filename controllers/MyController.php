<?
	namespace app\controllers;
	//use yii\web\Controller;
	class MyController extends AppController {
		
		public function actionIndex($id = null){
			$hi = 'Hello World!';
			return $this->render('index', compact('hi', 'id'));
			
		}
		
		
		
	}