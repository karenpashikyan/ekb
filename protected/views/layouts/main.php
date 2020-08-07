<!DOCTYPE html>
<html lang="ru">
 <head>
   <meta name="yandex-verification" content="1f4b0fcb1c859ca3" />
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-81717636-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-81717636-1');
</script>

   <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(38800370, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38800370" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<link rel="icon" href="https://www.master-na-chas.info/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">

  <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<link href="/css/muzhnachas_moskva.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php echo Yii::app()->name; ?> <?php echo CHtml::encode($this->pageTitle); ?> | Екатеринбург</title>
    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

    <script type="text/javascript">
      VK.init({apiId: 7524600, onlyWidgets: true});
    </script>

    </head>
 <body>


   <div class="box">

<!-- общая шапка -->

		<div class="header">

			<p class="tel1" >
				<a href="tel:+73432075540">тел. (343) 207 55 40</a>
				 <a href="tel:+79920144825">моб.8 992 01 44 825</a>
				 <a href="https://www.master-na-chas.info/">Екатеринбург</a>
         <a id="text_info"> без выходных с 8-00 до 22-00</a>
			</p>


			<div class="logo" >

  <a class="position" href="https://www.master-na-chas.info/">	<img  class="img1" src="/images/logo_muzh_na_chas_moskva.png" alt="Муж на час Москва"></a>

<!-- мобильная шапка header. mobail -->
        <div class="w">
          <div class="tel">
            <a class="tel3" target="_blank" href="tel:+73432075540">тел.(343) 207 55 40

            </a>
            <a class="tel3" target="_blank" href="tel:+79920144825">
              моб.8 992 01 44 825
            </a>
            <a class="tel3" href="https://www.master-na-chas.info/">Екатеринбург</a>
             <a id="text_info"> без выходных 8:00-22:00</a>
          </div>
<!-- бургер меню мобильная версия -->
          <div class="wrapper">
              <input type="checkbox" id="check-menu">
              <label for="check-menu">
                <div class="burger-line first"></div>
                <div class="burger-line second"></div>
                <div class="burger-line third"></div>
                <div class="burger-line fourth"></div>
              </label>
              <nav class="main-menu">

                   <?php $this->widget('zii.widgets.CMenu',array(
               'items'=>  Category::menu('ekbm'),

               )); ?>
              </nav>
          </div>
        </div>
<!-- начало бургер меню мобильная версия -->

				 <img class="img1 margin" src="/images/7_besplatno_muzh_na_chas.png" alt="Мастер на час Москва">



				</div>



		</div>
<!--  конец общая шапка -->










<div class="cent">
<!-- сервисное меню -->
	<div class="left">

		<div class="menu">
			 <?php $this->widget('zii.widgets.CMenu',array(
           'items'=>  Category::menu('ekb'),

           )); ?>
		</div>
<!-- конец сервисное меню -->

		<div class="log">
			<div class="log1">
				<h2 class="h2">Наши работы</h2>
				<div class="log2">

      	<?php
//foreach ($models as $one) {
  //  echo  '<p>'$one->long_discription.'</p>';


//}

      ///  echo CHtml::link('<h3 class="h">'.$model->long_discription.'</h3>',array('view', 'id'=>$model->id));
      ?>

          	<?php //echo $model->long_discriptio; ?>

				<a href="/gallery"><img class="skobka" src="/images/left-skobka.png" height="155" alt=""></a>
<a href="/gallery" class="pos"><img src="/images/works_img/q(1).jpg" class=" log3" alt=""></a>
<a href="/gallery" class="pos"><img src="/images/works_img/q(2).jpg" class=" log4" alt=""></a>
<a href="/gallery" class="pos"><img src="/images/works_img/q(4).jpg" class=" log5" alt=""></a>

				</div>
			</div>

		<div class="log1 lo">
			<p class="h2">Наши партнеры</p>
       <a href="#"><img class="partner" src="/images/partnery/Leroy_Merlin.svg.png" alt=""></a>
      <a href="#">  <img class="partner" src="/images/partnery/logo-castorama.jpg" alt=""></a>
      <a href="#"><img class="partner" src="/images/partnery/logo-eldorado.png" alt=""></a>
      <a href="#"><img class="partner" src="/images/partnery/logo-metro-cash-and-carry.png" alt=""></a>
      <img class="partner" src="/images/partnery/M.-Video-Logo.png" alt="">
      <img class="partner" src="/images/partnery/Obi.svg.png" alt="">
      <img class="partner" src="/images/partnery/ruta-66-png-.png" alt="">
      <img class="partner" src="/images/partnery/unnamed.png" alt="">
      <img class="partner" src="/images/partnery/uu.png" alt="">
      <img class="partner" src="/images/partnery/yy.png" alt="">
				<!-- <img class="box-partneri" src="/images/partners_company_muzh_na_chas.png" height="50" width="180" alt="Мастер на час Москва">

				<img class="box-partneri" src="/images/partners_company_muzh_na_chas.png" height="50" width="180" alt="Услуги Электрика">

				<img class="box-partneri" src="/images/partners_company_muzh_na_chas.png" height="50" width="180" alt="Услуги Сантехника"> -->


		</div>
		</div>



	</div>

<!-- вывод контента из бд -->
	<div class="center">
	 <?php echo $content; ?>
   <!-- <p class="a-footer">Название, адрес, телефон, контакты<br>
     <a class="a-footer" target="_blank" href="tel:+73432075540">тел. (343) 207 55 40</a>
     <a class="a-footer" target="_blank" href="mailto:post@master-na-chas.info/">  post@master-na-chas.info</a>
   </p> -->
	</div>
<!-- конец вывод контента из бд -->

</div>

<div class="cont">
    <a href="tel:+79920144825"> <img src="/images/icon/001-viber1.svg" alt=""></a>
  <a href="https://www.facebook.com/muzhnachas66/"> <img src="/images/icon/002-facebook1.svg" alt=""></a>
  <a href="https://www.instagram.com/masternachas_ekb/"><img src="/images/icon/003-instagram1.svg" alt=""></a>


  <a href="https://vk.com/zolotie.ruki"><img src="/images/icon/005-vk1.svg" alt=""></a>
  <a title="Telegram" href="tg://resolve?domain=KarenPashikyan"> <img src="/images/icon/006-telegram1.svg" alt=""></a>
        <a title="WhatsApp" href="whatsapp://send?phone=+79920144825"> <img src="/images/icon/004-whatsapp1.svg" alt=""></a>
    <a href="mailto:post@master-na-chas.info"> <img src="/images/icon/mail2.svg" alt=""></a>

</div>
		<div class="footer">


				<img class="footer-skobka-bottom" src="/images/footer-skobka-bottom.png" alt="">
<!-- навигация меседжеры -->
        <div class="cont1">
      <a href="https://www.facebook.com/muzhnachas66/" target="_blank"> <img src="/images/icon/002-facebook1.svg" alt=""></a>
      <a href="https://www.instagram.com/masternachas_ekb/" target="_blank"><img src="/images/icon/003-instagram1.svg" alt=""></a>


      <a href="https://vk.com/zolotie.ruki"><img src="/images/icon/005-vk1.svg" alt=""></a>
      <a title="Telegram" href="tg://resolve?domain=KarenPashikyan"> <img src="/images/icon/006-telegram1.svg" alt=""></a>

          <a title="WhatsApp" href="whatsapp://send?phone=+79920144825"> <img src="/images/icon/004-whatsapp1.svg" alt=""></a>
        <a href="mailto:post@master-na-chas.info"> <img src="/images/icon/mail2.svg" alt=""></a>
        </div>

<!-- конец навигация меседжеры -->
				<div class="a-footer">
          <div class="b-footer">
            <a class="a-footer b-footer" target="_blank" href="tel:+73432075540"> Тел. (343) 207 55 40 &ensp; </a>
          <a class="a-footer b-footer" target="_blank" href="mailto:post@master-na-chas.info">  Почта: post@master-na-chas.info</a>



          </div>
          <a class="a-footer b-footer" id="b-footer_font" href="https://www.master-na-chas.info/">© 2016-<?php  echo "2020";?> Мастер на час «ЗОЛОТЫЕ РУКИ»</a>
				</div>

		</div>

	</div>


  <script >
  var controls = document.querySelectorAll('.controls');
  for(var i=0; i<controls.length; i++){
      controls[i].style.display = 'inline-block';
  }

  var slides = document.querySelectorAll('#slides .slide');
  var currentSlide = 0;
  var slideInterval = setInterval(nextSlide,3000);

  function nextSlide(){
      goToSlide(currentSlide+1);
  }

  function previousSlide(){
      goToSlide(currentSlide-1);
  }

  function goToSlide(n){
      slides[currentSlide].className = 'slide';
      currentSlide = (n+slides.length)%slides.length;
      slides[currentSlide].className = 'slide showing';
  }


  var playing = true;
  var pauseButton = document.getElementById('pause');

  function pauseSlideshow(){
      playing = false;
      clearInterval(slideInterval);
  }

  function playSlideshow(){

      playing = true;
      slideInterval = setInterval(nextSlide,2000);
  }

  pauseButton.onclick = function(){
      if(playing){ pauseSlideshow(); }
      else{ playSlideshow(); }
  };

  var next = document.getElementById('next');
  var previous = document.getElementById('previous');

  next.onclick = function(){
      pauseSlideshow();
      nextSlide();
  };
  previous.onclick = function(){
      pauseSlideshow();
      previousSlide();
  };
</script>
</body>
</html>
