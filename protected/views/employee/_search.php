<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form search_form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!-- <div class="form-group">
		<?php echo $form->label($model,'id'); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'id'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'name'); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div> -->

	<div class="form-group">
		<label for="Employee_store_id" class="required control-label">所在门店</label>
        <?php echo $form->dropDownList($model, 'store_id', $store_list); ?>
		<?php echo $form->error($model,'store_id'); ?>
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

	<!-- <div class="form-group">
		<?php echo $form->label($model,'phone'); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'phone'); ?>
		</div>
	</div>

	<div class="form-group buttons">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo CHtml::submitButton('搜索'); ?>
		</div>
	</div> -->

<?php $this->endWidget(); ?>

</div><!-- search-form -->