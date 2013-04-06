<div class="view well well-small">

	<!-- <b><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php //echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br /> -->
 
	<b><?php echo CHtml::encode($data->getAttributeLabel('account_num')); ?>:</b>
	<?php //echo CHtml::encode($data->account_num); ?>
	<?php echo CHtml::link(CHtml::encode($data->account_num),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('label')); ?>:</b>
	<?php echo CHtml::encode($data->label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estrato')); ?>:</b>
	<?php echo CHtml::encode($data->estrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilities_id')); ?>:</b>
	<?php echo CHtml::encode($data->utilities_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('public_id')); ?>:</b>
	<?php echo CHtml::encode($data->public_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datecreate')); ?>:</b>
	<?php echo CHtml::encode($data->datecreate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodify')); ?>:</b>
	<?php echo CHtml::encode($data->datemodify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medidor_num')); ?>:</b>
	<?php echo CHtml::encode($data->medidor_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('users_id')); ?>:</b>
	<?php echo CHtml::encode($data->users_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entity_id')); ?>:</b>
	<?php echo CHtml::encode($data->entity_id); ?>
	<br />

	*/ ?>

</div>