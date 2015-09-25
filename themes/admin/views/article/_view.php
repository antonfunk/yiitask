<?php
/* @var $this ArticleController */
/* @var $data Article */

//$data->tree->label => so hat man zugriff auf die related tabelle
?>


<div class="panel panel-<?php echo $data->status == 1 ? 'success' : 'danger'; ?> ">
	<div class="panel-heading">
		<?php echo  CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id) , array('class'=>'badge')); ?>
		<?php  echo  CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-sm-12">
				<?php  echo CHtml::encode($data->teaser);?>


				<div class="date-done-property created-at">Erstellt am: <?php echo CHtml::encode($data->created); ?></div>
				<div class="date-done-property edited-at">Bearbeitet am: <?php echo CHtml::encode($data->edited); ?></div>

			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
				<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>

				<a href="#" class="btn btn-success btn-xs"><i class="fa fa-play"></i></a>
				<a href="#" class="btn btn-warning btn-xs"><i class="fa fa-stop"></i></a>
				<a href="#" class="btn btn-info btn-xs"><i class="fa fa-pause"></i></a>
			</div>
		</div>
	</div>
</div>



<?php /*
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tree_id')); ?>:</b>
	<?php echo CHtml::encode($data->tree_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teaser')); ?>:</b>
	<?php echo CHtml::encode($data->teaser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edited')); ?>:</b>
	<?php echo CHtml::encode($data->edited); ?>
	<br />

	<?php
	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted')); ?>:</b>
	<?php echo CHtml::encode($data->deleted); ?>
	<br />

	 ?>

</div> */
?>