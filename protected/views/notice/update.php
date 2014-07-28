<?php
/* @var $this NoticeController */
/* @var $model Notice */

$this->breadcrumbs=array(
	'公告'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'修改',
);

?>

<h1>修改公告 <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>