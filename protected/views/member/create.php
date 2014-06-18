<?php 
	$this->breadcrumbs=array(
		'会员管理'=>array('index'),
		'激活会员',
	);

	$this->renderPartial('_form', array('model'=>$model,'origin_list' =>$origin_list));
 ?>