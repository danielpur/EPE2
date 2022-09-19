<?php
include_once '../modelo/clientes.php';

if(isset($_POST['nombreCliente']) && 
isset($_POST['apellidoCliente']) && 
isset($_POST['rutCliente']) && 
isset($_POST['seguroCliente']) && 
isset($_POST['edadCliente'])
){
$nombre = $_POST['nombreCliente'];
$apellido = $_POST['apellidoCliente'];
$rut = $_POST['rutCliente'];
$seguro = $_POST['seguroCliente'];
$edad = $_POST['edadCliente'];


$clientes = new Clientes();
$clientes->registrarCliente($nombre,$apellido,$rut,$seguro,$edad);
header("Location: ../index.php");
}

?>
