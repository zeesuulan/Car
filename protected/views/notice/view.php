<?php
/* @var $this NoticeController */
/* @var $model Notice */

$this->breadcrumbs=array(
	'公告'=>array('index'),
	$model->title.' 的详细信息',
);
?>

<h1><?php echo $model->title; ?></h1>
<pre><?php echo $model->content; ?></pre>
<a href="<?=$this->createUrl("notice/update",array("id"=>$model->id))?>">修改此公告</a>

