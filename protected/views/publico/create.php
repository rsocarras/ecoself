<?php
$this->breadcrumbs=array(
	'Publicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Publico','url'=>array('index')),
	array('label'=>'Manage Publico','url'=>array('admin')),
);
?>

<h1>Create Publico</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>