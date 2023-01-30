<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Covid
 *
 * @author admin-infanta
 */
require_once "CONTROL/Pais.php";
class Covid {
     static public function leer($pais)
   {
       if (strcmp($pais, "all")==0)
               $url="https://covid-19.dataflowkit.com/v1";
       else 
               $url="https://covid-19.dataflowkit.com/v1/" . $pais;
       
       
       $data=json_decode(file_get_contents($url),JSON_OBJECT_AS_ARRAY);

      $ret=array();
       $i=0;
       if(self::is_assoc( $data ))
       {
         
          $ret[0]=new Pais($data);//he pedido solo un pais
          
           
           
       }
        else {
           foreach($data as $elemento) //he pedido varios paises
               $ret[$i++]=new Pais($elemento);
           
                   
       }
       return $ret;
   }
   static function is_assoc( $array ) {
	return array_keys( $array ) !== range( 0, count($array) - 1 );
   }

   static function leerSerializable($string){
        $s = file_get_contents("ficheros/covid");
        $a = unserialize($s);

        foreach ($a as $objeto) {
                if($objeto->getPais() == $string){
                                echo "econtrado" . $objeto->getPais();
                                $aux = $objeto;
                }
        

        }
                return $aux;
        
    }



    static function registrar($pais){
        $s = file_get_contents("ficheros/covid");
        $a = unserialize($s);
        foreach ($a as $objeto) {
                if($objeto->getPais() == $pais->getPais()){
                               
                                $aux = $objeto;
                }
        

        }
                

                $posicion = array_search($aux, $a);
                $aux->setTotalCasos("10");
                $a[$posicion] = $aux;
                $sa = serialize($a);
                file_put_contents("ficheros/covid", $sa);

    }
}
