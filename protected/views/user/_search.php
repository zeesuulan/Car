<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'member_num'); ?>
		<?php echo $form->textArea($model,'member_num',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dl_id'); ?>
		<?php echo $form->textField($model,'dl_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'origin_id'); ?>
		<?php echo $form->textField($model,'origin_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s2'); ?>
		<?php echo $form->textField($model,'s2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s3'); ?>
		<?php echo $form->textField($model,'s3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s4'); ?>
		<?php echo $form->textField($model,'s4'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->