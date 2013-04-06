<?php
$this->breadcrumbs=array(
	'Utilities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Utilities','url'=>array('index')),
	array('label'=>'Create Utilities','url'=>array('create')),
	array('label'=>'View Utilities','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Utilities','url'=>array('admin')),
);
?>

<h1>Update Utilities <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>