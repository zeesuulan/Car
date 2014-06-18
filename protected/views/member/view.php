<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'会员管理'=>array('index'),
	$model->dl_id,
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'member_num',
		'dl_id',
		'origin_name.name',
	),
)); ?>
