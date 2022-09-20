<?php
include_once '../modelo/clientes.php';

if(
isset($_POST['rutEliminar']) 

){
$rut = $_POST['rutEliminar'];
$clientes = new Clientes();
$clientes->eliminarCliente($rut);
header("Location: ../mostrar.php");
}

?>