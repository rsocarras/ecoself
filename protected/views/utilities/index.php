<?php
$this->breadcrumbs=array(
	'Utilities',
);

$this->menu=array(
	array('label'=>'Create Utilities','url'=>array('create')),
	array('label'=>'Manage Utilities','url'=>array('admin')),
);
?>

<h1>Utilities</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
