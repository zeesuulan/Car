<?php
/* @var $this StoreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'店面管理',
);

?>

<h1>店面列表</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
