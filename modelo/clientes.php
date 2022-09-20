<?php


class Clientes
{

    public function __construct()
    {
    }

    public function registrarCliente($nombre, $apellido, $rut, $seguro, $edad)
    {
        try {
            //CONECTAR BASE DE DATOS Y EJECUTAR QUERY
            include_once '../conexion/conexion.php';
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

    public function mostrarClientes()
    {
        try {
            //CONECTAR BASE DE DATOS Y EJECUTAR QUERY
            include_once './conexion/conexion.php';
            $conexion = new Conexion();
            $conectar = $conexion->conectar();
            $query = $conectar->prepare('SELECT * FROM clientes');
            $query->execute();
            echo '<table id="tablaMostrar" class="table table-striped table-bordered" cellspacing="0">
            <thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Rut</th>
			<th>Seguro</th>
			<th>Edad</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
		</tr>
	</thead><tbody>';
            while ($row = $query->fetch()) {
                echo '
                <tr>
                <td>' . $row["nombre"] . '</td>
                <td>' . $row["apellido"] . '</td>
                <td>' . $row["rut"] . '</td>
                <td>' . $row["seguro"] . '</td>
                <td>' . $row["edad"] . '</td>
                <td style="text-align:center">
                <form method="POST" action="./modificar.php">
                <input type="hidden" name="idClientes" value="' . $row['idClientes'] . '">
                <input type="hidden" name="nombre" value="' . $row["nombre"] . '">
                <input type="hidden" name="apellido" value="' . $row["apellido"] . '">
                <input type="hidden" name="rut" value="' . $row["rut"] . '">
                <input type="hidden" name="seguro" value="' . $row["seguro"] . '">
                <input type="hidden" name="edad" value="' . $row["edad"] . '">

                <input name="submit" type="image" src="./vista/img/pencil-square.svg">            
                </form>
                </td>
                <td style="text-align:center">
                
                <form method="POST" action="./controlador/eliminacionClientes.php">
                <input type="hidden" name="rutEliminar" value="' . $row["rut"] . '">
                <input name="submit" type="image" src="./vista/img/backspace-reverse-fill.svg">            
                </form>
                    
                </td>
            </tr>';
            }
        } catch (Exception $e) {
            echo 'ERROR' . $e;
        }
    }

    public function actualizarCliente($idClientes,$nombre, $apellido, $rut, $seguro, $edad)
    {

        try {
            //CONECTAR BASE DE DATOS Y EJECUTAR QUERY
            include_once '../conexion/conexion.php';
            $conexion = new Conexion();
            $query = $conexion->conectar()->prepare('UPDATE clientes SET 
            nombre = :nombre, 
            apellido = :apellido, 
            rut = :rut,
            seguro = :seguro,
            edad = :edad
            WHERE idClientes = :idClientes');

            $query->execute([
            
                'idClientes' => $idClientes,
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

    public function eliminarCliente($rut)
    {

        try {
            //CONECTAR BASE DE DATOS Y EJECUTAR QUERY
            include_once '../conexion/conexion.php';
            $conexion = new Conexion();
            $query = $conexion->conectar()->prepare('DELETE FROM clientes  WHERE rut = :rut');
            $query->execute([
                'rut' => $rut
            ]);
        } catch (Exception $e) {
            echo 'ERROR' . $e;
        }
    }
}
