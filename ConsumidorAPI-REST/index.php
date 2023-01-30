<?php

require_once("MODELO/Covid.php");

$co = new Covid();
$pais=$co::leerSerializable("Spain");

var_dump($pais);
//$co::registrar($pais);