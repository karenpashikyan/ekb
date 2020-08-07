<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head >
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=375px, initial-scale=1">
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<!-- <meta name="description" content="Муж или Мастер на час в Екатеринбурге. Здесь мы выставляем работы наших мастеров. Они выполняют работы по электрике, сантехнике, сборке мебели, ремонту квартир"> -->
	<!-- <meta name="description" content="<?php echo CHtml::encode($model->discription) ?>Мы оказываем услуги по вызову электрика, сантехника, плотника, сборщика мебели, мастера-универсала, мастера по установке антенн, бытовой техники, дверей замков"> -->
<!-- <meta name="keywords" content="вызвать электрика, сантехника, Екатеринбург, установка раковины, смесителя, люстры, дверей, замков, ручек, сборка мебели, кухни, ремонт диванов, мебели, установка техники, кухонного гарнитура, антенн, спутниковых антенн, устранение засора, переезды"> -->
<!-- <meta name="keywords" content="услуги электрика, услуги сантехника, Екатеринбург, муж на час, мастер на час, сборка мебели, ремонт мебели, ремонт квартир под ключ, установка замков, установка антенн, ремонт компьютеров, устранение засоров, переезды под ключ, услуги клининга"> -->
<!-- <meta name="description_master_chas" content="Муж на час выполнит работу по дому, установит полки, шкафчики, гардины, розетку, смеситель, телевизор, соберёт комод, стол, повесит люстру, поменяет замок"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<!-- <meta name="keywords" content="Муж или Мастер на час в Екатеринбурге. Здесь мы выставляем работы наших мастеров. Они выполняют работы по электрике, сантехнике, сборке мебели, ремонту квартир, установке антенн и дверей"> -->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/muzh_na_chas/index')),
				array('label'=>'Категории', 'url'=>array('/admin/category')),
				array('label'=>'Страницы', 'url'=>array('/admin/page')),
				array('label'=>'Запросы', 'url'=>array('/admin/request')),
				array('label'=>'Комментарии', 'url'=>array('/admin/comment')),
				array('label'=>'Настройки', 'url'=>array('/admin/sitting')),
				array('label'=>'Пользователи', 'url'=>array('/admin/user')),
array('label'=>'Оплата', 'url'=>array('/admin/cost')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">

	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
