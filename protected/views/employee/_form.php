<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form col-sm-6 col-sm-offset-3">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="form-group">
		<label for="Employee_store_id" class="required control-label">所在门店 <span class="required">*</span></label>
        <?php echo $form->dropDownList($model, 'store_id', $store_list); ?>
		<?php echo $form->error($model,'store_id'); ?>
	</div>
	
	<p class="note">带<span class="required">*</span>号必填</p>
	
	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '保存' : '修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
$(function() {
    $("input").addClass("form-control")
    $("input[type=submit]").removeClass("form-control").addClass("btn btn-default")
    $("label").addClass("control-label")
    $("select").addClass("form-control").css({"width": "20%", "display":"inline-block", "margin-left":"20px"})
})
</script>