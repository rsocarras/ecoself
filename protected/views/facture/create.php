<?php
$this->breadcrumbs=array(
	'Factures'=>array('index'),
	'Añadir Nueva Factura',
);

$this->menu=array(
	array('label'=>'List Facture','url'=>array('index')),
	array('label'=>'Manage Facture','url'=>array('admin')),
);
?>



<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>