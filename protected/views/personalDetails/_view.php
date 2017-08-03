<?php
/* @var $this PersonalDetailsController */
/* @var $data PersonalDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moblie_number')); ?>:</b>
	<?php echo CHtml::encode($data->moblie_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about_you')); ?>:</b>
	<?php echo CHtml::encode($data->about_you); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_day')); ?>:</b>
	<?php echo CHtml::encode($data->birth_day); ?>
	<br />


</div>