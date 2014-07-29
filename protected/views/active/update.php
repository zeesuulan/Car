<?php
/* @var $this ActiveController */
/* @var $model Active */

$this->breadcrumbs=array(
	'活动管理'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'修改',
);

?>

<h1>修改公告<?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>