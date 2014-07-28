<?php
/* @var $this NoticeController */
/* @var $model Notice */
/* @var $form CActiveForm */
?>

<div class="form search_form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'title'); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->label($model,'content'); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>255)); ?>
		</div>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->