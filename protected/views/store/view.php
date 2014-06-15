<?php
/* @var $this StoreController */
/* @var $model Store */

$this->breadcrumbs=array(
	'店面列表'=>array('index'),
	"店面信息",
);
?>

<h1>店面<span class="info_title"><?php echo $model->name; ?></span>的信息</h1>
<?php echo CHtml::link('修改店面信息',array('store/update' , 'id'=>$model->id))?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'address',
	),
)); ?>
