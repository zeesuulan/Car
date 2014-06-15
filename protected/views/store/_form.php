<?php
/* @var $this StoreController */
/* @var $model Store */
/* @var $form CActiveForm */
?>
<div class="form col-sm-6 col-sm-offset-3">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'store-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">带<span class="required">*</span>号必填</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		</div>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'address'); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		</div>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="form-group buttons">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
$(function() {
    $("input").addClass("form-control")
    $("input[type=submit]").removeClass("form-control").addClass("btn btn-default")
    $("label").addClass("control-label col-sm-2")
    $("form").addClass("form-horizontal")
    $("select").addClass("form-control").css({"width": "20%", "display":"inline-block", "margin-left":"20px"})
})
</script>