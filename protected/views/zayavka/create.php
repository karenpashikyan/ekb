<?php
/* @var $this RequestController */
/* @var $model Request */
 $this->pageTitle = 'Заявка';
// Yii::app()->clientScript->registerMetaTag(strip_tags(mb_substr($model->model, 0, 200, 'utf-8')) . 'Здесь Вы можете подать онлайн заявку на вызов соответствующего мастера по Екатеринбургу. Указываете адрес, телефон, электронную почту, день, время и описываете бытовую проблему', 'description');
// Yii::app()->clientScript->registerMetaTag(strip_tags(mb_substr($model->model, 0, 200, 'utf-8')) . 'Муж на час Екатеринбург, мастер на час Екатеринбург, услуги электрика, услуги сантехника, сборщик мебели, вызов мастера, вызов электрика, вызов сантехника, ремонт квартир, сборка мебели на дому, ремонт мебели, ремонт дивана, устранение засора', 'keywords');
//

$this->menu=array(
	array('label'=>'Жукрнал', 'url'=>array('index')),
	array('label'=>'Manage Request', 'url'=>array('admin')),
);
?>

<h1>Заявка</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
