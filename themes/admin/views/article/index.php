<?php
/* @var $this ArticleController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs = array(
    'Articles',
);
?>

<h1>Articles</h1>


<h4>&Uuml;bersicht Artikel</h4>

<div class="row">
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">Verzeichnisse
                <a href="#" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus"></i>&nbsp;Neuen Ordner</a>
            </div>
            <div class="panel-body">
                <?php echo is_array($trees) ? implode(PHP_EOL, $trees) : 'Keine Verzeichnisse gefunden'; ?>
            </div>
        </div>

    </div>


    <div class="col-sm-3 col-sm-push-6">

        <div class="panel panel-default">
            <div class="panel-heading">Ordner-Eigenschaften</div>
            <div class="panel-body">

                <ul class="list-group">
                    <li class="list-group-item">Eigenschaft 1</li>
                    <li class="list-group-item">Eigenschaft 2</li>
                    <li class="list-group-item">Eigenschaft 3</li>
                    <li class="list-group-item">Eigenschaft 4</li>
                    <li class="list-group-item">Eigenschaft 5</li>
                    <li class="list-group-item">Eigenschaft 6</li>
                    <li class="list-group-item">Eigenschaft 7</li>
                </ul>

            </div>
        </div>
    </div>


    <div class="col-sm-6  col-sm-pull-3">
        <div class="panel panel-default">
            <div class="panel-heading">Artikel <?php echo CHtml::link('Neuen Artikel erstellen', array('create'),
                    array('class' => 'btn btn-xs btn-primary pull-right')); ?></div>
            <div class="panel-body">

                <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider' => $dataProvider,
                    'itemView' => '_view',
                )); ?>


            </div>
        </div>

    </div>


</div>
