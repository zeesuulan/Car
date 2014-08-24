<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	'Login',
);
?>
<h1 style="text-align:center;"><?=$this->pageTitle?></h1>

<form class="form" style="width: 30%;margin: 50px auto;padding:20px;">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form', 'enableAjaxValidation'=>false
	// 'enableClientValidation'=>true,
	// 'clientOptions'=>array(
	// 	'validateOnSubmit'=>true,
	// ),
)); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'用户名：'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'密码：'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('登录'); ?>
	</div>

<?php $this->endWidget(); ?>
</form><!-- form -->
<script type="text/javascript">
$(function() {
    $("input").addClass("form-control")
    $("input[type=submit]").removeClass("form-control").addClass("btn btn-primary")
    $("label").addClass("control-label")
})
</script>