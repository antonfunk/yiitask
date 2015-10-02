<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">
	<div class="col-xs-12">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	'htmlOptions'=>array(
		'class'=>'form-horizontal',
	),

	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="alert alert-info">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>

		<div class="form-group">
		<?php echo $form->labelEx($model,'tree_id',array('class'=>"col-sm-2 control-label")); ?>
			<div class="col-sm-10">
		<?php echo $form->textField($model,'tree_id',array('class'=>"form-control",'placeholder'=>'Verzeichnis')); ?>
		<?php echo $form->error($model,'tree_id',array('class'=>'alert alert-danger') ); ?>
			</div>
	</div>


		<div class="form-group">
			<?php echo $form->labelEx($model,'title',array('class'=>"col-sm-2 control-label")); ?>
			<div class="col-sm-10">
				<?php echo $form->textField($model,'title',array('maxlength'=>255,'class'=>"form-control",'placeholder'=>'Titel')); ?>
				<?php echo $form->error($model,'title'); ?>
			</div>
		</div>


		<div class="form-group">
			<?php echo $form->labelEx($model,'teaser',array('class'=>"col-sm-2 control-label")); ?>
			<div class="col-sm-10">
				<?php echo $form->textArea($model,'teaser',array('rows'=>6, 'cols'=>50,'class'=>"form-control",'placeholder'=>'Kurztext')); ?>
				<?php echo $form->error($model,'teaser'); ?>
			</div>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'text',array('class'=>"col-sm-2 control-label")); ?>
			<div class="col-sm-10">
				<?php echo $form->textArea($model,'text',array('rows'=>12, 'cols'=>100,'class'=>"form-control",'placeholder'=>'Details')); ?>
				<?php echo $form->error($model,'text'); ?>
			</div>
		</div>


	<div class="row">
		<?php //echo $form->labelEx($model,'created'); ?>
		<?php //echo $form->textField($model,'created'); ?>
		<?php //echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'edited'); ?>
		<?php //echo $form->textField($model,'edited', array('value'=>date('Y-m-d H:i:s'))); ?>
		<?php //echo $form->error($model,'edited'); ?>
	</div>


		<?php //echo $form->labelEx($model,'deleted'); ?>
		<?php //echo $form->textField($model,'deleted'); ?>
		<?php //echo $form->error($model,'deleted'); ?>



		<div class="form-group">
			<div class="col-sm-12">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Erstellen' : 'Speichern',array('class'=>'btn btn-primary pull-right')); ?>
			</div>
		</div>

<?php $this->endWidget(); ?>

	</div>
</div><!-- form -->