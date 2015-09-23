<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.3.3.5/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

    <div id="page-header">

    </div>


    <?php
    $this->widget('MainMenu');  //Hauptmenu laden, template unter views menu mainmenu.php
    /*$this->widget('zii.widgets.CMenu',array(
        'items'=>array(
            array('label'=>'Home', 'url'=>array('/site/index')),
            array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
            array('label'=>'Contact', 'url'=>array('/site/contact')

    ),
            $categories,
            #array('label'=>'Login', 'url'=>Yii::app()->request->baseUrl.'/backend.php?r=site/login', 'visible'=>Yii::app()->user->isGuest),
            #array('label'=>'Account', 'url'=>Yii::app()->request->baseUrl.'/backend.php?r=site/index', 'visible'=>!Yii::app()->user->isGuest),
            #array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
        ),
    ));*/
    ?>


    <!-- breadcrumbs -->
    <?php if (isset($this->breadcrumbs)) {
        $this->widget('zii.widgets.CBreadcrumbs', array('links' => $this->breadcrumbs,));
    } ?>
    <!-- breadcrumbs -->

    <div class="row">
        <div class="col-md-12">
    <?php echo $content; ?>
        </div>
    </div>


</div>
<!-- page -->

<div class="container">
    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by My Company. All Rights Reserved. <?php echo Yii::powered(); ?>
    </div>
</div>

</body>
</html>
