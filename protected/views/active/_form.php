<?php
/* @var $this ActiveController */
/* @var $model Active */
/* @var $form CActiveForm */
?>

<div class="form col-sm-8 col-sm-offset-2">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'active-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group clearfix">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group clearfix">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>10)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="form-group clearfix">
		<?php echo $form->labelEx($model,'member_price'); ?>
		<?php echo $form->textField($model,'member_price'); ?>
		<?php echo $form->error($model,'member_price'); ?>
	</div>

	<div class="form-group clearfix">
		<?php echo $form->labelEx($model,'non_member_price'); ?>
		<?php echo $form->textField($model,'non_member_price'); ?>
		<?php echo $form->error($model,'non_member_price'); ?>
	</div>

	<div class="form-group clearfix buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '保存' : '修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
$(function() {
    $("input").addClass("form-control")
    $("textarea").addClass("form-control")
    $("input[type=submit]").removeClass("form-control").addClass("btn btn-default")
    $("label").addClass("control-label")
})
</script>