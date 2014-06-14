<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->id,
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'member_num',
		'password',
		'dl_id',
		'origin_id',
	),
)); ?>
