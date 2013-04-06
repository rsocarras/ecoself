<?php
$this->breadcrumbs=array(
	'Publicos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Publico','url'=>array('index')),
	array('label'=>'Create Publico','url'=>array('create')),
	array('label'=>'Update Publico','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Publico','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Publico','url'=>array('admin')),
);
?>

<h1>View Publico #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'label',
		'country_id',
		'tipo',
	),
)); ?>
