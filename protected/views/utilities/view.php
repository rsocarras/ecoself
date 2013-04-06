<?php
$this->breadcrumbs=array(
	'Utilities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Utilities','url'=>array('index')),
	array('label'=>'Create Utilities','url'=>array('create')),
	array('label'=>'Update Utilities','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Utilities','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Utilities','url'=>array('admin')),
);
?>

<h1>View Utilities #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'label',
		'city_id',
		'public_id',
	),
)); ?>
