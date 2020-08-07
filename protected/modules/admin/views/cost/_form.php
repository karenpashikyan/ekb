<?php
/* @var $this CostController */
/* @var $model Cost */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cost-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"> Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->dropDownlist($model,'user_id',  User::all()); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownlist($model,'status', array( 1=>"оплачено",2=>"не оплачено")); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>	

<div class="row">
		<?php echo $form->labelEx($model,'sum'); ?>
		<?php echo $form->textField($model,'sum',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'sum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'request_id'); ?>
		<?php echo $form->dropDownlist($model,'request_id',  Request::all()); ?>
		<?php echo $form->error($model,'request_id'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'manager'); ?>
		<?php echo $form->textField($model,'manager',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'manager'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->