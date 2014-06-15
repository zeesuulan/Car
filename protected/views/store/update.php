<?php
/* @var $this StoreController */
/* @var $model Store */

$this->breadcrumbs=array(
	'店面列表'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'修改店面信息',
);
?>

<h4>修改店面<span class="info_title"><?php echo $model->name; ?></span>的信息</h4>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>