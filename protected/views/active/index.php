<?php
/* @var $this ActiveController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'活动',
);

?>

<h1>活动</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
