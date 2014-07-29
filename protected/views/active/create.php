<?php
/* @var $this ActiveController */
/* @var $model Active */

$this->breadcrumbs=array(
	'活动管理'=>array('index'),
	'创建活动',
);

?>

<h1>创建活动</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>