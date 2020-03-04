<?php 
//Hace uso del servicio wsdl

$url="http://localhost/ExUD6/ventas.wsdl";
$cliente = new SoapClient($url);

//Devuelve los comerciales
$muestra = $cliente->getComerciales();
echo "<h3>Comerciales en plantilla</h3>";
foreach ($muestra as $key) {
    echo $key ."<br>";
}
?><hr><hr>
<h3>Productos del catálogo</h3>
<?php
//Devuelve los productos del catálogo
$muestra = $cliente->getProducto();
foreach ($muestra as $key) {
    echo $key . "<br>";
}

?>
<hr><hr>
<h3>Consulta de ventas</h3>
<form action="#" method="post">

<input type="text" name="ref" id="">Referencia <br>
<input type="submit" value="Mostrar">

</form>
<?php
//Consulta las ventas del producto
if(isset($_POST["ref"])){
    $muestra2 = $cliente->getConsultaVentasProducto($_POST["ref"]);
    //var_dump($muestra);
    foreach ($muestra2 as $key) {
        echo $key."<br>";
    }

}else{
    echo "Introduce una referencia válida";
}






?>