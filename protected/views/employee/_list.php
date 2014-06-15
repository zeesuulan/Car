<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$data,
	'attributes'=>array(
		'name',
		'store.name',
		'phone',
	),
)); ?>