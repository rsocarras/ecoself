<?php
$this->breadcrumbs=array(
	'Utilities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Utilities','url'=>array('index')),
	array('label'=>'Manage Utilities','url'=>array('admin')),
);
?>

<h2>Create Utilities (empresa de servicios Publicos)</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>