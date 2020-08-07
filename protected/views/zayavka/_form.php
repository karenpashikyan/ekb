<?php
/* @var $this RequestController */
/* @var $model Request */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'request-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

<div id="r" class="roww">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',  User::all()); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>



<div class="roww">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('maxlength'=>250)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

<div class="roww">
		<?php echo $form->labelEx($model,'time_start'); ?>
		<?php echo $form->textField($model,'time_start'); ?>
		<?php echo $form->error($model,'time_start'); ?>
	</div>
<div class="roww">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('maxlength'=>250)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>




<div class="roww">
		<?php echo $form->labelEx($model,'short_description'); ?>
		<?php echo $form->textField($model,'short_description',array('maxlength'=>250)); ?>
		<?php echo $form->error($model,'short_description'); ?>
	</div>


<div class="roww">
		<?php echo $form->labelEx($model,'description'); ?>
<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50, 'placeholder'=>'Укажите дату и время, профиль мастера и какие работы надо выполнить')); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
<div class="ro">
		Минимальная стоимость заказа 1000 рублей
	</div>
<div class="input">

<div class="input">
	<?php // echo $form->labelEx($model,'verifyCode'); ?>
<!--<img id = "yw0"src="/images/partnery/captcha.png" alt="">-->
	<?php //if(CCaptcha::checkRequirements()): ?>

	<?php // echo $form->textField($model,'verifyCode'); ?>
<!--<div class="input ro">Введите код проверки</div>-->
	<!--<div class="input">





	</div>

		<!-- <div class="input">
	<?php //echo $form->error($model,'verifyCode'); ?>
</div> -->
</div>
<?php //endif; ?>

	<div class="rowwww buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>
<?php // $this->widget('CCaptcha'); ?>
</div>






<!--
	<div class="rowww">
		<?php //echo $form->labelEx($model,'sum'); ?>
		<?php //echo $form->textField($model,'sum',array('size'=>50,'maxlength'=>50)); ?>
		<?php // echo $form->error($model,'sum'); ?>
	</div>

<div class="row">
		<?php //echo $form->labelEx($model,'order_date'); ?>
		<?php //echo $form->textField($model,'order_date'); ?>
		<?php //echo $form->error($model,'order_date'); ?>
	</div>






	<div class="row">

	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'author'); ?>
		<?php //echo $form->textField($model,'author',  User::all()); ?>

		<?php //echo $form->error($model,'author'); ?>
	</div> -->




<?php $this->endWidget(); ?>

</div><!-- form -->
