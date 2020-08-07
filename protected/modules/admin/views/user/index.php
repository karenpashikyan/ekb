<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал пользователей</h1>



<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id'=> array(
                    'name'=>'id',
                    'headerHtmlOptions'=> array('width'=>30)
                ),
		'username',
		
		'ban'=> array(
                    'name'=>'ban',
                    'headerHtmlOptions'=> array('width'=>30)
                ),
		'bankcard',
'manager',
			'role'=> array(
                     'name'=>'role',
                     'value'=>'($data->role==1)?"продавец":"менедж"',
                    'filter'=>array(1=>"продавец",2=>"менедж",3=>"админ"), 
                 ),
		/*
		'password',
		'created',
		'request_id',
		'phone',
		'passport',
		'photo',
		
		'email',
		'debt',
		'money',
		
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
