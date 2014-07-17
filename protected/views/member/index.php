<?php
/* @var $this MemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    '会员列表',
);

 $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'ajaxUpdate'=>false,
    'template'=>'{sorter}{pager}{items}{summary}',
    'itemView'=>'_list',
    'pager'=>array(  
        'maxButtonCount'=>'7'
        )
)); ?>
