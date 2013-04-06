<div class="view hero-unit">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('label')); ?>:</b>
	<?php echo CHtml::encode($data->label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region_name')); ?>:</b>
	<?php echo CHtml::encode($data->region_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_num')); ?>:</b>
	<?php echo CHtml::encode($data->code_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('region_id')); ?>:</b>
	<?php echo CHtml::encode($data->region->label); ?>
	<br />


</div>