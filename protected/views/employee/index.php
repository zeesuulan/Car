<?php
/* @var $this EmployeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'员工管理',
);
?>

<h1>员工列表</h1>

<?php $this->widget('zii.widgets.CListView', array( 
	'dataProvider'=>$dataProvider,
	'itemView'=>'_list',
	'ajaxUpdate'=>false,
	'template'=>'{sorter}{pager}{summary}{items}{pager}',
 )); ?>
