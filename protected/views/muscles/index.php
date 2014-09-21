<?php
/* @var $this MusclesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Muscles',
);

$this->menu=array(
	array('label'=>'Create Muscles', 'url'=>array('create')),
	array('label'=>'Manage Muscles', 'url'=>array('admin')),
);
?>

<h1>Muscles</h1>
<div id="paper1" style="margin: 0 auto;"></div>
<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>
<?
// Draw hidden table with params
echo '<table style="display: none">';
foreach($musclesData as $key=>$muscle)
{
    //print_r($muscle);
    echo '<tr>';
    echo '<th>'. $muscle['name'] .'</th>';
    echo '<td id="fill">'. $muscle['fill'] .'</td>';
    echo '<td id="stroke">'. $muscle['stroke'] .'</td>';
    echo '<td id="stroke-width">'. $muscle['stroke-width'] .'</td>';
    echo '<td id="stroke-miterlimit">'. $muscle['stroke-miterlimit'] .'</td>';
    echo '<td id="stroke-opacity">'. $muscle['stroke-opacity'] .'</td>';
    echo '<td id="fill-over">'. $muscle['fill-over'] .'</td>';
    echo '<td id="path">'. $muscle['path'] .'</td>';

    echo '</tr>';

}
echo '</table>';
?>