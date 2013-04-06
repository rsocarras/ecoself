<?php
$this->breadcrumbs=array(
	'Publicos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Publico','url'=>array('index')),
	array('label'=>'Create Publico','url'=>array('create')),
	array('label'=>'View Publico','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Publico','url'=>array('admin')),
);
?>

<h1>Update Publico <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>