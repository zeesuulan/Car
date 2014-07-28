<?php
/* @var $this MemberController */
/* @var $model Member */
$this->breadcrumbs=array(
	'会员管理'=>array('index'),
	'用户：'.$dlInfo->name,
);
?>
<?php 
	echo CHtml::link('修改会员信息',array('member/update' , 'id'=>$model->id));
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'member_num',
			'dlInfo.name',
			'dlInfo.id_num',
			'dlInfo.valid_date_start',
			'dlInfo.valid_date_end',
			'dlInfo.dl_level',
			'dlInfo.birthday',
			'dlInfo.address',
			'dlInfo.nationality',
			'dlInfo.firsttime',
		),
	)); 
?>
