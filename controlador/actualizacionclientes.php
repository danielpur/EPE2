<?php
include_once '../modelo/clientes.php';

if (
    isset($_POST['nombreCliente']) &&
    isset($_POST['apellidoCliente']) &&
    isset($_POST['rutCliente']) &&
    isset($_POST['seguroCliente']) &&
    isset($_POST['edadCliente'])
) {

    $idClientes = $_POST['idClientes'];
    $nombre = $_POST['nombreCliente'];
    $apellido = $_POST['apellidoCliente'];
    $rut = $_POST['rutCliente'];
    $seguro = $_POST['seguroCliente'];
    $edad = $_POST['edadCliente'];



    $clientes = new Clientes();
    $clientes->actualizarCliente($idClientes, $nombre, $apellido, $rut, $seguro, $edad);
    header("Location: ../mostrar.php");

}
