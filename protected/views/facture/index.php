<?php
$this->breadcrumbs=array(
	'Factures',
);

$this->menu=array(
	array('label'=>'Create Facture','url'=>array('create')),
	array('label'=>'Manage Facture','url'=>array('admin')),
);

$client=new SoapClient('http://desarrollo.e-mc2.com.ar/Service.svc?wsdl');
$resultadoDelEnvio = $client->ProcesarInforme( '1;1;1;1;1;1' );
print_r($resultadoDelEnvio);
if ($resultadoDelEnvio==TRUE) {
  echo "ok";
 } else{
 	echo "no ok";
 }

?>

<h1>Factures</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
