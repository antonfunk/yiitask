<?php
/* @var $this TreeController */
$this->breadcrumbs = array(
    'Tree',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php echo implode(PHP_EOL,$trees);?>
