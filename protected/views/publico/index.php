<?php
$this->breadcrumbs=array(
	'Publicos',
);

$this->menu=array(
	array('label'=>'Create Publico','url'=>array('create')),
	array('label'=>'Manage Publico','url'=>array('admin')),
);
?>

<h1>Publicos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
