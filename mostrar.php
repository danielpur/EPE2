<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="./vista/css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header class="container-fluid d-flex justify-content-center">
        <div>
            <img id="logo" src="./vista/img/logosura.png">
        </div>
    </header>
   <?php
   include './vista/modulos/navegacion.php';
   ?>
    <section>
 
    <form id="formIngresarClientes" class="mx-5 p-3">
            <h3 style="text-align:center">Datos Personales</h3>
            <table id="tablaIngresarClientes">
                <tr>
                    <td>
                        <label for="nombre" class="form-label">Ingrese Nombre</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" id="nombreCliente" name="nombreCliente">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="apellido" class="form-label">Ingrese Apellido</label>
                    </td>
                    <td>
                    <input type="text" class="form-control" id="apellidoCliente" name="apellidoCliente">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="rut" class="form-label">Ingrese Rut</label>
                    </td>
                    <td>
                    <input type="text" class="form-control" id="nombreCliente" name="rutCliente">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="seguro" class="form-label">Seleccione Seguro</label>  
                    </td>
                    <td>
                    <select class="form-select" aria-label="Default select example" id="seguroCliente" name="seguroCliente">
                            <option selected>Seguros</option>
                            <option value="Seguros Hogar">Seguros Hogar</option>
                            <option value="Seguros Automóvil">Seguros Automóvil</option>
                            <option value="Seguros Accidentes">Seguros Accidentes</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="edad" class="form-label">Ingrese Edad</label>
                    </td>
                    <td>
                    <input type="text" class="form-control" id="edadCliente" name="edadCliente">
                    </td>
                </tr>
           
            </table>
            <br>
            <button id="btnIngresarClientes" type="submit" class="btn btn-success">Registrar Cliente</button>
        </form>
    
    
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>