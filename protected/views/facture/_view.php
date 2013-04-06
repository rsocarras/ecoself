<div class="span3">
<div class="view well well-small">

	<?php /*<b> echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); 
	 <br />*/?>
	

	<?php 
	echo "<b>".CHtml::encode($data->getAttributeLabel('facture_num')).":</b>"; 
	echo CHtml::link(CHtml::encode($data->facture_num),
		array('view','id'=>$data->id),
		array('rel'=>'tooltip','title'=>'Datos de la Factura'))."<br />";

	echo "<b>".CHtml::encode($data->getAttributeLabel('accounts_id')); 
	echo ":</b>";
	echo CHtml::encode($data->accounts->account_num); 
	echo "<br />";
	
	echo "<b>".CHtml::encode($data->getAttributeLabel('consumo')).": </b>"; 
	echo CHtml::encode($data->consumo);
	echo " ".CHtml::encode($data->tipo_medida);
	
	if ($data->consumo>"6" && $data->consumo<="7" ) {
		echo " <span class='label label-warning'>Warning</span>";
		}else if($data->consumo>"7"){
		echo " <span class='label label-important'>important</span>";	
		}else{
		echo " <span class='label label-success'>Success</span>";		
		}
	echo "<br/>";
	?>
	


	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_pay_date')); ?>:</b>
	<?php echo CHtml::encode($data->t_pay_date); 

	?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('discount')); ?>:</b>
	<?php echo CHtml::encode($data->discount); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('tax')); ?>:</b>
	<?php echo CHtml::encode($data->tax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datecreate')); ?>:</b>
	<?php echo CHtml::encode($data->datecreate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodify')); ?>:</b>
	<?php echo CHtml::encode($data->datemodify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('users_id')); ?>:</b>
	<?php echo CHtml::encode($data->users_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entity_id')); ?>:</b>
	<?php echo CHtml::encode($data->entity_id); ?>
	<br />

	*/ ?>
</div>
</div>