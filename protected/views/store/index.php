<?php
/* @var $this StoreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'店面列表',
);

?>

<h1>店面列表</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'ajaxUpdate'=>false,
	'template'=>'{sorter}{pager}{summary}{items}{pager}',
	'itemView'=>'_list',
	'pager'=>array(  
                'maxButtonCount'=>'7',  
                )
)); ?>
