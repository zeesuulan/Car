<?php
/* @var $this StoreController */
/* @var $model Store */

$this->breadcrumbs=array(
	'店面管理'=>array('index'),
	"店面列表",
);
?>

<h1>View Store #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'address',
		'name',
	),
)); ?>
