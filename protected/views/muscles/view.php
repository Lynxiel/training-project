<?php
/* @var $this MusclesController */
/* @var $model Muscles */

$this->breadcrumbs=array(
	'Muscles'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Muscles', 'url'=>array('index')),
	array('label'=>'Create Muscles', 'url'=>array('create')),
	array('label'=>'Update Muscles', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Muscles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Muscles', 'url'=>array('admin')),
);
?>

<h1>View Muscles #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'group_id',
	),
)); ?>
