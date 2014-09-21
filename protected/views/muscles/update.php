<?php
/* @var $this MusclesController */
/* @var $model Muscles */

$this->breadcrumbs=array(
	'Muscles'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Muscles', 'url'=>array('index')),
	array('label'=>'Create Muscles', 'url'=>array('create')),
	array('label'=>'View Muscles', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Muscles', 'url'=>array('admin')),
);
?>

<h1>Update Muscles <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>