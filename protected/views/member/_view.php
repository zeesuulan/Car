<?php
/* @var $this MemberController */
/* @var $data Member */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_num')); ?>:</b>
	<?php echo CHtml::encode($data->member_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dl_id')); ?>:</b>
	<?php echo CHtml::encode($data->dl_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('origin_id')); ?>:</b>
	<?php echo CHtml::encode($data->origin_id); ?>
	<br />


</div>