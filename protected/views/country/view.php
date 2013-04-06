<?php
$this->breadcrumbs=array(
	'Countries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Country','url'=>array('index')),
	array('label'=>'Create Country','url'=>array('create')),
	array('label'=>'Update Country','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Country','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Country','url'=>array('admin')),
);
?>

<h1>View Country #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'iso2',
		'short_name',
		'long_name',
		'iso3',
		'numcode',
		'un_member',
		'calling_code',
		'cctld',
	),
)); ?>
