<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>Создать страницу</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php $this->widget('application.modules.admin.extensions.ckeditor.CKEditor', array(
'model'=>$model,
'attribute'=>'content',
'language'=>'ru',
'editorTemplate'=>'full',
)); ?>