<?php
/* @var $this TreeController */
$this->breadcrumbs = array('Tree' => array('/tree'), 'Create',);
?>
<div class="panel panel-default">
    <div class="panel-heading">Verzeichnis erstellen</div>
    <div class="panel-body">


        <?php echo CHtml::beginForm(); ?>

        <table class="table table-bordered table-hover">
            <tbody>
            <tr>
                <td style="width:20%;">Verzeichnis Name</td>
                <td></td>
            </tr>
            <tr>
                <td>Status</td>
                <td></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td><a href="#" class="btn btn-primary">Speichern</a></td>
            </tr>
            </tbody>

        </table>

        <?php echo CHtml::endForm(); ?>

    </div>

</div>
