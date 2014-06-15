<?php
/* @var $this StoreController */
/* @var $model Store */

$this->breadcrumbs=array(
	'店面列表'=>array('index'),
	'新增店面信息',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>