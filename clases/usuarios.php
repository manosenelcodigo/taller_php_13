<?php
require_once("conectar.php");
require_once("helpers.php");
class Usuarios extends Conectar
{
    private $db;
    
    public function __construct() 
    {
        $this->db=parent::conectar();
        parent::setNames();   
    }
    public function getDatos()
    {
        $sql="
            select
            id,nombre,correo,telefono,fecha
            from
            usuarios;
            ";
       $datos= $this->db->query($sql);
       $arreglo=array();
       while($reg=$datos->fetch_object())
       {
            $arreglo[]=$reg;
       }  
       return $arreglo;   
    }

}
