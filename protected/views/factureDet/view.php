<?php
$this->breadcrumbs=array(
	'Facture Dets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FactureDet','url'=>array('index')),
	array('label'=>'Create FactureDet','url'=>array('create')),
	array('label'=>'Update FactureDet','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete FactureDet','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FactureDet','url'=>array('admin')),
);
?>

<h1>View FactureDet #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'facture_id',
		'label',
		'total',
		'tax',
		'consumo',
		'medida',
		'discount',
		'qty',
		'date_venc',
		'datecreate',
	),
)); ?>
