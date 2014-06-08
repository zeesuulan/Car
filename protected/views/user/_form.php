<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'member_num'); ?>
		<?php echo $form->textArea($model,'member_num',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'member_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textArea($model,'password',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dl_id'); ?>
		<?php echo $form->textField($model,'dl_id'); ?>
		<?php echo $form->error($model,'dl_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'origin_id'); ?>
		<?php echo $form->textField($model,'origin_id'); ?>
		<?php echo $form->error($model,'origin_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s2'); ?>
		<?php echo $form->textField($model,'s2'); ?>
		<?php echo $form->error($model,'s2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s3'); ?>
		<?php echo $form->textField($model,'s3'); ?>
		<?php echo $form->error($model,'s3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s4'); ?>
		<?php echo $form->textField($model,'s4'); ?>
		<?php echo $form->error($model,'s4'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->