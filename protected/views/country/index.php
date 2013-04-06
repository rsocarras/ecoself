<?php
$this->breadcrumbs=array(
	'Countries',
);

$this->menu=array(
	array('label'=>'Create Country','url'=>array('create')),
	array('label'=>'Manage Country','url'=>array('admin')),
);
?>

<h1>Countries</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
