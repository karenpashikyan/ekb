

<?php if(Yii::app()->user->hasFlash('sitting')): ?>


<div class="flash-success">
	<h4 class="alert_success"><?php echo Yii::app()->user->getFlash('sitting'); ?></h4>
</div>
<?php endif; ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sitting-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	


</div><!-- form -->
<article class="module width_full">
			<header><h3>Настройки</h3></header>
				<div class="module_content">
                                    
					<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'defaultStatusComment'); ?>
		<?php echo $form->checkBox($model,'defaultStatusComment'); ?>
		<?php echo $form->error($model,'defaultStatusComment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'defaultStatusUser'); ?>
		<?php echo $form->checkBox($model,'defaultStatusUser'); ?>
		<?php echo $form->error($model,'defaultStatusUser'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Сохранить'); ?>
	</div>
				</div>
		</article>
<?php $this->endWidget(); ?>