<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form search_form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!-- <div class="form-group">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div> -->

	<div class="form-group">
		<?php echo $form->label($model,'member_num'); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'member_num',array('size'=>20,'maxlength'=>20)); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="Employee_store_id" class="required control-label">来源渠道</label>
        <?php echo $form->dropDownList($model, 'origin_id', $origin_list); ?>
		<?php echo $form->error($model,'origin_id'); ?>
	</div>

	<!-- <div class="form-group">
		<?php echo $form->label($model,'dl_id'); ?>
		<?php echo $form->textField($model,'dl_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'origin_id'); ?>
		<?php echo $form->textField($model,'origin_id'); ?>
	</div> -->
	<div class="form-group buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->