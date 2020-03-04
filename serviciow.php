<?php 

$url="http://localhost/ExUD6/cliente.php"; 
$uri="http://localhost/ExUD6"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 


$muestra = $cliente->getComerciales();
//var_dump($muestra);
echo "<h3>Comerciales en plantilla</h3>";
foreach ($muestra as $key) {
    echo $key;
}
?><hr><hr>
<h3>Productos del catálogo</h3>
<?php
$muestra = $cliente->getProducto();
foreach ($muestra as $key) {
    echo $key;
}

?>
<hr><hr>
<h3>Consulta de ventas</h3>
<form action="#" method="post">

<input type="text" name="ref" id="">Referencia <br>
<input type="submit" value="Mostrar">

</form>
<?php

if(isset($_POST["ref"])){
    $muestra2 = $cliente->getConsultaVentasProducto($_POST["ref"]);
    //var_dump($muestra);
    foreach ($muestra2 as $key) {
        echo $key;
    }

}else{
    echo "Introduce una referencia válida";
}






?>