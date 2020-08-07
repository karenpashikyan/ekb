
<h1>
	события
</h1>
<div class="">
<?php
foreach ($models as $one){





	echo CHtml::link('<h3 >'.$one->title.'</h3>',array('view', 'id'=>$one->id));
  echo   "<p>".substr($one->short_discriptio,0,260)."<p>";


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
