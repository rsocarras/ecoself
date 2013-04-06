<?php
$this->breadcrumbs=array(
	'Cities',
);

$this->menu=array(
	array('label'=>'Create City','url'=>array('create')),
	array('label'=>'Manage City','url'=>array('admin')),
);
?>

<h1>Cities</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
