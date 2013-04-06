<?php
$this->breadcrumbs=array(
	'Factures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Facture','url'=>array('index')),
	array('label'=>'Manage Facture','url'=>array('admin')),
);
?>

<blockquote>
  <p>Create Facture</p>
  <small></small>
</blockquote>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>