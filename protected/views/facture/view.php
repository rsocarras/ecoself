<?php
$this->breadcrumbs=array(
	'Factures'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Facture','url'=>array('index')),
	array('label'=>'Create Facture','url'=>array('create')),
	array('label'=>'Update Facture','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Facture','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Facture','url'=>array('admin')),
);
?>



<blockquote>
  <p>Factura No. <?php echo $model->facture_num; ?></p>
  <small><?php 	echo $model->accounts->label; 
				echo " #";
				echo $model->accounts->account_num;
		?></small>
</blockquote>


<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'facture_num',
		//'accounts_id',
		'total',
		'tax',
		'consumo',
		'tipo_medida',
		't_pay_date',
		'discount',
		//'datecreate',
		//'datemodify',
		//'users_id',
		//'entity_id',
	),
)); ?>
