<?php
class StockController extends CController
{
    /*
        requerido por todo el sistema de WebServices de Yii para saber como tratar tus actions,
        los cuales incorporan unas anotaciones especiales.
    */
    public function actions()
    {
        return array(
            'ws'=>array(
                'class'=>'CWebServiceAction',
            ),
        );
    }
    /** la anotacion soap es requerida para que este metodo sea reconocido como un metodo remoto.
    
     * @soap
     */
    public function getObtenerMensajeRemoto($argX)
    {
        return "HOLA REMOTO, TU MENSAJE ES: ".$argX;
    }
    /** la anotacion soap es requerida para que este metodo sea reconocido como un metodo remoto.
    
     * @soap
     */
   public function getOtenerArrayRemoto(){
        return CJSON::encode(array('1'=>'uno','2'=>'dos','3'=>'tres'));
    }
} 
?>