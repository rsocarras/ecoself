<?php
$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	'Crear Nueva Cuenta',
);

$this->menu=array(
	array('label'=>'List Accounts','url'=>array('index')),
	array('label'=>'Manage Accounts','url'=>array('admin')),
);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>