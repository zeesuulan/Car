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

	<div class="form-group">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'member_num'); ?>
		<?php echo $form->textField($model,'member_num',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'dl_id'); ?>
		<?php echo $form->textField($model,'dl_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'origin_id'); ?>
		<?php echo $form->textField($model,'origin_id'); ?>
	</div>
	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->