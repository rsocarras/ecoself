<?php
$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Accounts','url'=>array('index')),
	array('label'=>'Create Accounts','url'=>array('create')),
	array('label'=>'Update Accounts','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Accounts','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Accounts','url'=>array('admin')),
);
?>
<blockquote>
  <p>Cuenta - <strong><?php echo $model->label; ?></strong></p>
  <small> Cuenta No.<?php echo $model->account_num; ?></small>
</blockquote>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
	//	'id',
	//	'account_num',
		'label',
		'estrato',
		'utilities_id',
		'public_id',
	//	'datecreate',
	//	'datemodify',
		'medidor_num',
	//	'users_id',
	//	'entity_id',
	),
)); ?>
