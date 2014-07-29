<?php
/* @var $this ActiveController */
/* @var $model Active */

$this->breadcrumbs=array(
	'活动管理'=>array('index'),
	$model->title.' 的详细信息',
);

?>

<h1><?php echo $model->title; ?></h1>
<p>会员价：￥<?php echo $model->member_price; ?></p>
<p>非会员价：￥<?php echo $model->non_member_price; ?></p>
<pre><?php echo $model->content; ?></pre>
