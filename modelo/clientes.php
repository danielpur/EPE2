<?php
include_once './conexion/conexion.php';

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

    public function mostrarClientes() {
        try {
            //CONECTAR BASE DE DATOS Y EJECUTAR QUERY
            $conexion = new Conexion();
            $conectar = $conexion->conectar();
            $query = $conectar->prepare('SELECT * FROM clientes');
            $query->execute();
            echo '<table id="tablaMostrar" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Rut</th>
			<th>Seguro</th>
			<th>Edad</th>
		</tr>
	</thead><tbody>';
            while ($row = $query->fetch()) {
                echo '
                <tr>
                <td>'.$row["nombre"].'</td>
                <td>'.$row["apellido"].'</td>
                <td>'.$row["rut"].'</td>
                <td>'.$row["seguro"].'</td>
                <td>'.$row["edad"].'</td>
            </tr>';

                
            }
        } catch (Exception $e) {
            echo 'ERROR' . $e;
        }
    }
}
