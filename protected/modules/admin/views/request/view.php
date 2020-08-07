<?php
/* @var $this RequestController */
/* @var $model Request */

$this->breadcrumbs=array(
	'Requests'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Request', 'url'=>array('index')),
	array('label'=>'Create Request', 'url'=>array('create')),
	array('label'=>'Update Request', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Request', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить это?')),
	array('label'=>'Manage Request', 'url'=>array('admin')),
);
?>

<h1>Заявка номер_<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',

		//'status',
		'user_id',
			'title',
		// 'client_name',
		'time_start',
'address',

//'phone',
'short_description',
		//'master_name',
		'description',
		//'sum',

		//'order_date',



		//'time_finish',
		//'author',
		//'paid',
	),
)); ?>
