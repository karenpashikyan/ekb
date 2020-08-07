
<?php
/* @var $this PageController */

$this->breadcrumbs=array(
	'Категория:'.$category->title,
);

?>
<h1>
	Услуги
</h1>
<div class="disc">
<?php
foreach ($models as $one){


	echo '<div class="disk_box">';

		echo CHtml::link('<h3 class="h">'.$one->long_discription.'</h3>',array('view', 'id'=>$one->id));
	echo	'<h3  class="h3">';
		echo CHtml::link('<h3 class="h2">'.$one->title.'</h3>',array('view', 'id'=>$one->id));
  echo   "<p>".substr($one->short_discriptio,0,260)."<p>";
		echo 	"</div>";
		'</h3>';
}
if(!$models)
    echo 'в данной категории информайции нет';
?>
<br>

<div class="rowwww6">

	<a href="/admin/request/create">подать заявку</a>
	<!-- <input type="submit" name="" value="подать заявку"> -->
</div>

</div>
