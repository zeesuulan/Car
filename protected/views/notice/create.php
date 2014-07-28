<?php
/* @var $this NoticeController */
/* @var $model Notice */

$this->breadcrumbs=array(
	'公告'=>array('index'),
	'创建公告',
);


?>

<h1>创建公告</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>