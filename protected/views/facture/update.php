<?php
$this->breadcrumbs=array(
	'Factures'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facture','url'=>array('index')),
	array('label'=>'Create Facture','url'=>array('create')),
	array('label'=>'View Facture','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Facture','url'=>array('admin')),
);
?>

<h1>Update Facture <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>