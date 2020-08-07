

<?php
$this->pageTitle = 'Регистрация'; 
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php if(Yii::app()->user->hasFlash('registration')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('registration'); ?>
</div>

<?php else: ?>


<h1 class="">Регистрация</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>


    <?php echo $form->errorSummary($model); ?>

    <div class="input">
      <?php echo $form->labelEx($model,'username'); ?>
      <?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'username'); ?>
    </div>

    <div class="input">
        <?php echo $form->labelEx($model,'password'); ?>
     <?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
      <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="input">
     <?php echo $form->labelEx($model,'email'); ?>
      <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
     <?php echo $form->error($model,'email'); ?>
    </div>
   <div class="input">
	<?php echo $form->labelEx($model,'phone'); ?>
	<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
	<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="input">
	<?php echo $form->labelEx($model,'passport'); ?>
	<?php echo $form->textField($model,'passport',array('size'=>20,'maxlength'=>20)); ?>
<?php echo $form->error($model,'passport'); ?>
	</div>

	<div class="input">
	<?php echo $form->labelEx($model,'bankcard'); ?>
	<?php echo $form->textField($model,'bankcard',array('size'=>50,'maxlength'=>50)); ?>
<?php echo $form->error($model,'bankcard'); ?>
	</div>


      <div class="input">
    <?php if(CCaptcha::checkRequirements()): ?>

		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div class="input">
		<?php $this->widget('CCaptcha'); ?>


    		<div id="yw0" >
		<?php echo $form->textField($model,'verifyCode'); ?>
    </div>
		</div>
		<div class="ro input">Введите код проверки</div>

		<?php echo $form->error($model,'verifyCode'); ?>


	<?php endif; ?>

    <div class="rowwww2 buttons">
        <?php echo CHtml::submitButton('Регистрация'); ?>
    </div>
</div>

<?php $this->endWidget(); ?>

<?php endif; ?>
