<?php
include_once '../conexion/conexion.php';

class Clientes{

    public function __construct(){
    }

    public function registrarCliente($nombre, $apellido, $rut, $seguro, $edad) {
        try {
            //CONECTAR BASE DE DATOS Y EJECUTAR QUERY
            $conexion = new Conexion();
            $conectar = $conexion->conectar();
            $query = $conectar->prepare('INSERT INTO clientes(nombre, apellido, rut, seguro, edad) VALUES
            (:nombre, :apellido, :rut, :seguro,:edad)');
            $query->execute([
                'nombre' => $nombre,
                'apellido' => $apellido,
                'rut' => $rut,
                'seguro' => $seguro,
                'edad' => $edad
            ]);
        } catch (Exception $e) {
            echo 'ERROR' . $e;
        }
    }
}
