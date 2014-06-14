<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'员工管理'=>array('index'),
	$model->name,
);
?>

<h1>View Employee #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'store_id',
		'phone',
	),
)); ?>
