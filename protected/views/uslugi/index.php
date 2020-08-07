
<?php
/* @var $this PageController */
//$this->pageTitle=Yii::app()->name . 'Услуги';
$this->pageTitle = 'Услуги';
Yii::app()->clientScript->registerMetaTag(strip_tags(mb_substr($model->text, 0, 200, 'utf-8')) . 'Муж на час выполнит работу по дому, установит полки, шкафчики, гардины, розетку, смеситель, телевизор, соберёт комод, стол, повесит люстру, поменяет замок', 'description');
Yii::app()->clientScript->registerMetaTag(strip_tags(mb_substr($model->text, 0, 200, 'utf-8')) . 'Муж на час Екатеринбург, мастер на час Екатеринбург, услуги электрика, услуги сантехника, сборщик мебели, вызов мастера, вызов электрика, вызов сантехника, ремонт квартир, сборка мебели на дому, ремонт мебели, ремонт дивана, устранение засора', 'keywords');


?>
<h1>
	Услуги
</h1>
<div class="disc">
<?php
foreach ($models as $one){


	echo '<div class="disk_box">';

		echo CHtml::link('<h3 class="h">'.$one->long_discription.'</h3>',array('view', 'id'=>$one->url));
	echo	'<h3  class="h3">';
		echo CHtml::link('<h3 class="h2">'.$one->title.'</h3>',array('view', 'id'=>$one->url));
  echo   "<p>".substr($one->short_discriptio,0,260)."<p>";
		echo 	"</div>";
		'</h3>';
}
if(!$models)
    echo 'в данной категории информайции нет';
?>
<br>

<div class="rowwww6">

	<a href="/zayavka">подать заявку</a>
	<!-- <input type="submit" name="" value="подать заявку"> -->
</div>

</div>
