<?php


$method = $_SERVER["REQUEST_METHOD"];

if($method == "GET"){
    require_once("VISTA/formulario.php");
    if(isset($_GET["error"])){
        if($_GET["error"] == 1){
            echo "<p style='color:red'>Error. </br> No se encontro ningun pais con ese nombre, introduzca un nombre de pais valido</p>";
        }
    }
}