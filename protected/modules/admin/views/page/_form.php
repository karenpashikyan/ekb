<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"> Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->dropDownlist($model,'category_id',  Category::all()); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'short_discriptio'); ?>
		<?php echo $form->textField($model,'short_discriptio',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'short_discriptio'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'discription'); ?>
		<?php echo $form->textField($model,'discription',array('size'=>100,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'discription'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>100,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'keywords'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>100,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'long_discription'); ?>
		<?php echo $form->textArea($model,'long_discription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'long_discription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownlist($model,'status', array(1=>'доступно', 0=>'скрыто')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
