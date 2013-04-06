<?php
class MiCliente {
    private $cliente = null;

        /*
           inicializacion "Lazy" del cliente. este metodo es para que se inicialize el sistema interno de php para conectarse con el cliente remoto. 
       */
    private function getClienteInt() {
        if($this->cliente == null)
        {
            // sino pones estas opciones entonces no reconoce las nuevas funciones del WS que vayas creando
            ini_set (  'soap.wsdl_cache_enable'  ,  0  ); 
            ini_set (  'soap.wsdl_cache_ttl'  ,  0  );
            // LA URL DEL WEBSERVICE A DONDE NOS CONECTAMOS, mas abajo la explico, por ahora solo USALA ASI.
            $url = "http://coco/tuservidorRemotodePrueba/index.php?r=miservidorremoto/ws";
            $this->cliente = new SoapClient($url);
        }
        return $this->cliente;
    }

        /*
            consumiendo el metodo remoto: obtenerMensajeRemoto pasandole un argumento de prueba ARGX

       */
    public function obtenerMensajeRemoto($argX) {
        return $this->getClientInt()->getObtenerMensajeRemoto($argX);
    }

    public function obtenerArrayRemoto() {
        return CJSON::decode($this->getClientInt()->getObtenerArrayRemoto());
    }
} 
?>