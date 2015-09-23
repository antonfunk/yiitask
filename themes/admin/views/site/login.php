<?php
/*$this->renderPartial('webroot.themes.default.views.site.login', array(
    'model' => $model
));*/
?>

<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array('Login',);
?>


<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
    'htmlOptions' => array(
        'class' => 'form form-horizontal'
    )
)); ?>


<div class="form admin-login-form">

<table class="table table-bordered">
    <tbody>
    <tr>
        <td><?php echo $form->labelEx($model,'username'); ?></td>
        <td><?php echo $form->textField($model,'username',array('required'=>'required','class'=>'form-control')); ?></td>
    </tr>
    <tr>
        <td><?php echo $form->labelEx($model,'password'); ?></td>
        <td><?php echo $form->passwordField($model,'password',array('required'=>'required','class'=>'form-control')); ?></td>
    </tr>
  <tr>
        <td><?php echo $form->label($model,'rememberMe'); ?></td>
        <td><?php echo $form->checkBox($model,'rememberMe'); ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td><?php echo CHtml::submitButton('Login',array('class'=>'btn btn-primary')); ?></td>
    </tr>

    </tbody>
</table>




    <?php echo $form->error($model,'password',array('class'=>'alert alert-danger')); ?>
    <?php echo $form->error($model,'username',array('class'=>'alert alert-danger')); ?>
    <?php echo $form->error($model,'rememberMe',array('class'=>'alert alert-danger')); ?>



</div>

<?php $this->endWidget(); ?>

<div class="alert alert-info">
    Hint: You may login with <div class="badge">demo</div>&nbsp;/&nbsp;<div class="badge">demo</div> or <div class="badge">admin</div>&nbsp;/&nbsp;<div class="badge">admin</div>.
</div>
<!-- form -->

