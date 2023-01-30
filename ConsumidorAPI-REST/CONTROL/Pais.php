<?php


Class Pais {
   private $CasosActivos;
   private $Pais;
   private $UltimaModificacion;
   private $NuevosCaos;
   private $Muertos;
   private $TotalCasos;
   private $TotalMuertost;
   private $TotalRegistrados;
   
   public function __construct($aux) {
       
       $clase= get_object_vars($this);
       
       foreach($clase as $key=>$value)
       {
           $this->$key=current($aux);
           
           next ($aux);
       }
        
     
   }


   public function getCasosActivos() {
    return $this->CasosActivos;
}

public function getPais() {
    return $this->Pais;
}

public function getUltimaModificacion() {
    return $this->UltimaModificacion;
}

public function getNuevosCaos() {
    return $this->NuevosCaos;
}

public function getMuertos() {
    return $this->Muertos;
}

public function getTotalCasos() {
    return $this->TotalCasos;
}

public function getTotalMuertost() {
    return $this->TotalMuertost;
}

public function getTotalRegistrados() {
    return $this->TotalRegistrados;
}

public function setCasosActivos($CasosActivos): void {
    $this->CasosActivos = $CasosActivos;
}

public function setPais($Pais): void {
    $this->Pais = $Pais;
}

public function setUltimaModificacion($UltimaModificacion): void {
    $this->UltimaModificacion = $UltimaModificacion;
}

public function setNuevosCaos($NuevosCaos): void {
    $this->NuevosCaos = $NuevosCaos;
}

public function setMuertos($Muertos): void {
    $this->Muertos = $Muertos;
}

public function setTotalCasos($TotalCasos): void {
    $this->TotalCasos = $TotalCasos;
}

public function setTotalMuertost($TotalMuertost): void {
    $this->TotalMuertost = $TotalMuertost;
}

public function setTotalRegistrados($TotalRegistrados): void {
    $this->TotalRegistrados = $TotalRegistrados;
}
}
