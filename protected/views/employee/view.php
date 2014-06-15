<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'员工管理'=>array('index'),
	$model->name,
);
?>

<h1>员工信息</h1>
<?php echo CHtml::link('修改员工信息',array('employee/update' , 'id'=>$model->id))?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'store_id',
		'phone',
	),
)); ?>
