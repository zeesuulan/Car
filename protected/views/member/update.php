<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'会员管理'=>array('index'),
	$dl_model->name=>array('view','id'=>$model->id),
	'更新会员 '.$dl_model->name.' 信息',
);

?>



<?php $this->renderPartial('_form', array('model'=>$model,'dl_model'=>$dl_model,'origin_list' =>$origin_list, 'dlevel_list' => $dlevel_list)); ?>