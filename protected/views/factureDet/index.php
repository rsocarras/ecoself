<?php
$this->breadcrumbs=array(
	'Facture Dets',
);

$this->menu=array(
	array('label'=>'Create FactureDet','url'=>array('create')),
	array('label'=>'Manage FactureDet','url'=>array('admin')),
);
?>

<h1>Facture Dets</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
