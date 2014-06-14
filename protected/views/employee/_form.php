<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'store_id'); ?>
        <?php echo $form->dropDownList($model, 'store_id', $store_list); ?>
		<?php echo $form->error($model,'store_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '保存' : '修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->