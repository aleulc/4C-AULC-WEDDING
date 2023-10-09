<?php 
class conexion{
static public function conectar(){
    $link = new PDO("mysql:host=localhost:3307;dbname=wedding_aulc_4c","soporte_3C","soporte_3C");
    $link -> exec("set names utf8");
    return $link;
}
}
?>