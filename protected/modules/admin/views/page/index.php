<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#page-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1>Страницы</h1>



<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'page-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id'=> array(
                    'name'=>'id',
                    'headerHtmlOptions'=> array('width'=>30)
                ),
		'category_id'=> array(
                    'name'=>'category_id',
                    'value'=>'$data->category->title',
                    'filter'=> Category::all(),
                ),

		'title',


		'status'=> array(
                     'name'=>'status',
                     'value'=>'($data->status==1)?"доступно":"скрыто"',
                    'filter'=>array(0=>"скрыто",1=>"доступно"),
                 ),
	    'created' => array(
                    'name'=>'created',
                    'value'=>'date("j.m.Y H:i", $data ->created)',
                    'filter'=>false,
                ),


		/*

'short_discriptio',
		'long_discription',
		'discription',
		'content',
		'keywords',
		'url',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
