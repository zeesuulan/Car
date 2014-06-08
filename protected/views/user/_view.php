<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_num')); ?>:</b>
	<?php echo CHtml::encode($data->member_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dl_id')); ?>:</b>
	<?php echo CHtml::encode($data->dl_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('origin_id')); ?>:</b>
	<?php echo CHtml::encode($data->origin_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s2')); ?>:</b>
	<?php echo CHtml::encode($data->s2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s3')); ?>:</b>
	<?php echo CHtml::encode($data->s3); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('s4')); ?>:</b>
	<?php echo CHtml::encode($data->s4); ?>
	<br />

	*/ ?>

</div>