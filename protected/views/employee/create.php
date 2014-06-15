<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'员工管理'=>array('index'),
	'创建员工信息',
);
?>

<h1>创建员工信息</h1>
<?php $this->renderPartial('_form', array('model'=>$model,'store_list' =>$store_list)); ?>