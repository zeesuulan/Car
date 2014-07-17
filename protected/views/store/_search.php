<?php
/* @var $this StoreController */
/* @var $model Store */
/* @var $form CActiveForm */
?>

<div class="form search_form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="form-group">
		<?php echo $form->label($model,'address'); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'name'); ?>
		<div class="col-sm-10">
			<?php echo $form->textField($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		</div>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->