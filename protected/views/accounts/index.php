<?php
$this->breadcrumbs=array(
	'Accounts',
);

$this->menu=array(
	array('label'=>'Create Accounts','url'=>array('create')),
	array('label'=>'Manage Accounts','url'=>array('admin')),
);
?>

<h1>Accounts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
