<?php
$this->breadcrumbs=array(
	'Facture Dets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FactureDet','url'=>array('index')),
	array('label'=>'Create FactureDet','url'=>array('create')),
	array('label'=>'View FactureDet','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage FactureDet','url'=>array('admin')),
);
?>

<h1>Update FactureDet <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>