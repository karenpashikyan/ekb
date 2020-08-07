<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle = 'Контакты';
?>

<h1>Напишите нам</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="input">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>
<div class="input">

	<?php if(CCaptcha::checkRequirements()): ?>

	<div class="input">
		<?php echo $form->labelEx($model,'verifyCode'); ?>

		<?php $this->widget('CCaptcha'); ?>
	</div>
		<div id="yw0">
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		
		<?php echo $form->error($model,'verifyCode'); ?>

	<?php endif; ?>

	<div class="rowwww2 buttons">
		<?php echo CHtml::submitButton('Отправить'); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
