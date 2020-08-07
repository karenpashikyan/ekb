<!-- слайдер -->
<div class="container">
  <ul id="slides">
    <li class="slide showing"></li>
    <li class="slide"></li>
    <li class="slide"></li>
    
  </ul>
  <div class="buttons_slider">
    <input   type="button" value="<"  class="controls" id="previous">
        <button class="controls" id="pause"></button>
		<input  type="button"  value=">" style="text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);" class="controls" id="next">




  </div>
</div>


	<!-- <a class="a-center-pic" target="_blank" href="/images/galstuk.png">
		<p class="a-p-center">Умеем Всё</p>
	</a> -->

<!-- конец слайдер -->

<!-- общая информация желтый квадрат -->
<div class="inf">
	<!--<img class="img_1" src="/images/online_zapis_muzh_na_chas_2.png" alt="">-->
	<h1 class="h3">
    Муж на час "Золотые руки"<br> услуги вызова мастера на дом</h1>


		<div class="p-center">
				<p class="p-c">
<?php
Yii::app()->clientScript->registerMetaTag(strip_tags(mb_substr($model->text, 0, 200, 'utf-8')) . 'Муж на час Екатеринбург» или «Мастер на час Екатеринбург» это услуги вызова мастера на дом, для решения домашних бытовых проблем. У нас мастера разного профиля', 'description');
Yii::app()->clientScript->registerMetaTag(strip_tags(mb_substr($model->text, 0, 200, 'utf-8')) . 'Муж на час Екатеринбург, мастер на час Екатеринбург, услуги электрика, услуги сантехника, сборщик мебели, вызов мастера, вызов электрика, вызов сантехника, ремонт квартир, сборка мебели на дому, ремонт мебели, ремонт дивана, устранение засора', 'keywords');
$this->pageTitle = 'Муж на час';
//$this->pageTitle = $model->title;
//foreach($model as $one){   echo $one->short_discriptio; echo '';}
 ?>
Приходилось ли вам когда-нибудь устранять последствия сантехнической аварии, случившейся по воле случая или по вине сантехника-любителя которого вызвали на дом? Пустеющий семейный бюджет, нервы — это только часть того, что приходится пережить в таких ситуациях. Не стоит забывать о том.

<br>
      <?php



      //$this->widget('zii.widgets.CMenu',array(
       //   'items'=>  Category::menu('left')
      //    )); ?>
<!-- <a class ="link_index" href="https://brigadir777.ru/page/index/id/3">новостная лента</a> -->
<a class ="link_index" href="/novostnaya_lenta">новостная лента</a>

					</p>
		</div>


		<div class="p-chitatdalshe" >
		<a href="/zayavka"><div class="e">
		Онлайн заявка
	</div></a>

</div>
<!-- конец общая информацияю желтый квадрат -->
</div>

<!-- карта -->
<div class="map">
  <div class="">
    <script charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa7a95157f6fbe390978dc8b96d6eed897dd91eec1825672279668a4a77c70d68&amp;width=100%25&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script><!-- VK Widget -->

  </div>

<div class="">

  <!-- Put this div tag to the place, where the Comments block will be -->
  <div id="vk_comments"></div>
  <script type="text/javascript">
  VK.Widgets.Comments("vk_comments", {limit: 5, attach: "*"});
  </script>
</div>

	<!-- конец виджет вконтактеа-->


</div>
