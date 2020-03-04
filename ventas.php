<?php 
//Genera el wdsl en el navegador 
require_once("funciones.php"); 
require_once("WSDLDocument.php");

$url="http://localhost/ExUD6/cliente.php";
$uri="http://localhost/ExUD6";

$accion = new WSDLDocument("Ventas",$url,$uri);
echo  $accion->saveXML();


?>
