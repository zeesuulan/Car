<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$data,
	'attributes'=>array(
		'dlInfo.name',
		'member_num',
	),
)); ?>
//todo 用户名增加链接，直接跳到用户信息页面