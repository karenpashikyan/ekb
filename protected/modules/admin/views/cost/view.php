<?php
/* @var $this CostController */
/* @var $model Cost */

$this->breadcrumbs=array(
	'Costs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cost', 'url'=>array('index')),
	array('label'=>'Create Cost', 'url'=>array('create')),
	array('label'=>'Update Cost', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cost', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cost', 'url'=>array('admin')),
);
?>

<h1>View Cost #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sum',
		'request_id',
		'status',
		'manager',
		'user_id',
	),
)); ?>
