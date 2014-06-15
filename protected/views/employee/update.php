<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'员工管理'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'修改店面信息',
);

?>

<h1>修改员工<span class="info_title"><?php echo $model->name; ?></span>的信息</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'store_list' =>$store_list)); ?>