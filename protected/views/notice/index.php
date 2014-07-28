<?php
/* @var $this NoticeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'公告',
);

?>

<h1>公告</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
