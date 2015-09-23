<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />




	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.3.3.5/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/admin-theme.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>


<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><?php echo CHtml::encode(Yii::app()->name); ?>-Admin</a>
		</div>
		<div class="navbar-collapse collapse" id="navbar">
			<?php


			$this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Dashboard', 'url'=>array('/site/index')),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Artikel', 'url'=>array('/site/articles'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				),
				'htmlOptions'=>array('class'=>'nav navbar-nav')
			)); ?>

		</div><!--/.nav-collapse -->
	</div>
</nav>

<div class="container" id="page">
	<?php echo $content; ?>
</div><!-- page -->

<footer class="footer" id="footer">
	<div class="container">
		<p class="text-muted">
			Copyright &copy; <?php echo date('Y'); ?> by <?php echo Yii::app()->name;?>.<br/>
			All Rights Reserved.<br/>
		</p>
	</div>
</footer>

</body>
</html>
