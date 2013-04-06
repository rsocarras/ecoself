<?php
$this->breadcrumbs=array(
	'Facture Dets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FactureDet','url'=>array('index')),
	array('label'=>'Manage FactureDet','url'=>array('admin')),
);
?>

<h1>Create FactureDet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>