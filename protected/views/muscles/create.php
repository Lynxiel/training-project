<?php
/* @var $this MusclesController */
/* @var $model Muscles */

$this->breadcrumbs=array(
	'Muscles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Muscles', 'url'=>array('index')),
	array('label'=>'Manage Muscles', 'url'=>array('admin')),
);
?>

<h1>Create Muscles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>