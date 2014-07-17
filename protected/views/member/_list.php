<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$data,
	'attributes'=>array(
		'dlInfo.name',
		'member_num',
		'origin_name.name'
	),
)); ?>