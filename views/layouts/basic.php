<?php
	
	/* @var $this \yii\web\View */
	/* @var $content string */
	
	use app\widgets\Alert;
	use yii\helpers\Html;
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
	use yii\widgets\Breadcrumbs;
	use app\assets\AppAsset;
	
	AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<head>
		<title><?= Html::encode($this->title) ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php $this->registerCsrfMetaTags() ?>
		
		<?php $this->head() ?>
	</head>
	<body>
		<?php $this->beginBody() ?>
		
		<div class="wrap">
			<div class="container">
				<ul class="nav nav-pills" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation" class="active"><?= Html::a('Главная', '/web/');  ?></li>
					<li role="presentation"><?= Html::a('Статьи', ['post/index']);  ?></li>
					<li role="presentation"><?= Html::a('Статья', ['post/show']);  ?></li>
					
				</ul>
				
				<?= $content; ?>
				
			</div>
		</div>
		
		
		
		
		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>
