<?
	use yii\widgets\ActiveForm;
	use yii\helpers\Html;
	
?>


<h1>Form login Users</h1>
<?
	//debugAll($model);
	$token = md5(rand(0, PHP_INT_MAX));
	
	
?>
<? if( Yii::$app->session->hasFlash('success') ){ ?>
	<div class="alert alert-success alert-dismissible show" role="alert">
		<strong><? echo Yii::$app->session->getFlash('success'); ?></strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	
	
<? } ?>
<? if( Yii::$app->session->hasFlash('error') ){ ?>
	<div class="alert alert-warning alert-dismissible show" role="alert">
		<strong><? echo Yii::$app->session->getFlash('error'); ?></strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	
<? } ?>
<? $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal'], 'id'=>'test-form-name']) ?>
<? echo $form->field($model, 'name')->label('Ваше имя') ?>
<? echo $form->field($model, 'email')->input('email') ?>
<? echo $form->field($model, 'hash')->input('text', ['value'=>$token]) ?>
<? echo Html::submitButton('Отправить', ['class'=>'btn btn-success']) ?>


<? debugAll($users_data); ?>






















<? ActiveForm::end() ?>