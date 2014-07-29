<?php
/* @var $this ActiveController */
/* @var $data Active */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_price')); ?>:</b>
	<?php echo CHtml::encode($data->member_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('non_member_price')); ?>:</b>
	<?php echo CHtml::encode($data->non_member_price); ?>
	<br />


</div>