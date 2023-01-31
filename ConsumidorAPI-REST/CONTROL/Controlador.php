<?php

require_once("../MODELO/Covid.php");
require_once("Pais.php");
$modeloCovid = new Covid();
$nombrePais = $_POST["nombrePais"];
$fechaHoy = date("Y-m-d H:i");


$paisApi = $modeloCovid::leer($nombrePais)[0];
if($paisApi->getPais() == "World"){
    echo "pais desconocido";
    header("Location:../index.php?error=1");
}else{
    $paisAnterior= $modeloCovid::LeerAnterior($nombrePais);
    $nuevosCasos = (int)$paisApi->getTotalCasos() - (int)$paisAnterior->getTotalCasos();
    
    
    
        $modeloCovid::registrar($paisApi);
    
        require_once("../VISTA/pagina.php");
}


