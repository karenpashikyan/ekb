<?php
/* @var $this RequestController */
/* @var $model Request */
// $cs = Yii::app()->getClientScript();
// $cs->registerMetaTag($model->title,'Keywords');
// $cs->registerMetaTag($model->description,'description');

$this->breadcrumbs = array(
    'Requests' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Журнал', 'url' => array('index')),
    array('label' => 'Создать', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#request-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал Заявок</h1>


<?php echo CHtml::link('Расширенный поиск', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search', array(
        'model' => $model,
    )); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'request-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,

    'columns' => array(
        'user_id' => array(
            'name' => 'user_id',
            'value' => '$data->user->username',
            'filter' => User::all(),
        ),
        'id' => array(
            'name' => 'id',
            'headerHtmlOptions' => array('width' => 30)
        ),
        'title',
        'time_start',
        'time_finish' => array(
            'name' => 'time_finish',
            'value' => 'date("j.m.Y H:i", $data ->time_finish)',
            'filter' => false,
        ),
        'master_name',
        'sum',
        'order_date',


        /*
        'status'=> array(
                             'name'=>'status',
                             'value'=>'($data->status==0)?"в работе":"выполнена"',
                            'filter'=>array(0=>"новая", 1=>"текущая",2=>"выполнена",3=>"отказ"),
                         ),

        'time_start',
        'time_finish',
                'description',

                'short_description',

                'address',
                'client_name',
                'phone',
                'author',

                */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
)); ?>
