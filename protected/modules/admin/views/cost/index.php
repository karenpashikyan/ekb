<?php
/* @var $this CostController */
/* @var $model Cost */

$this->breadcrumbs=array(
	'Costs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cost', 'url'=>array('index')),
	array('label'=>'Create Cost', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cost-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал оплаты</h1>



<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cost-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id'=> array(
                    'name'=>'id',
                    'headerHtmlOptions'=> array('width'=>30)
                ),
'user_id'=> array(
                    'name'=>'user_id',
                    'value'=>'$data->user->username',
                    'filter'=> User::all(),
                ),
		'sum',
		'request_id'=> array(
                    'name'=>'request_id',
                    'value'=>'$data->request->title',
                    'filter'=> Request::all(),
                ),
	
		'manager',	
'status'=> array(
                     'name'=>'status',
                     'value'=>'($data->status==1)?"оплачено":"не оплачено"',
                    'filter'=>array(1=>"оплачено",2=>"не оплачено"), 
                 ),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
