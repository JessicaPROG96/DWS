<?php

    //variables de conexion 
    $hostDB = '127.0.0.1';
    $nombreDB = 'pruebaphp';
    $usuarioDB = 'root';
    $contrasenyaDB = '';
    //conectarse a la base de datos 
    //conectarse a la base de datos 
    //$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $nuevoPDO = new PDO("mysql:host=$hostDB;dbname=$nombreDB;", $usuarioDB, $contrasenyaDB);
    //comprueba que haya recibido datos por post 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //recoge los datos 
    $matricula=$_POST['matricula'];  
    $marca=$_POST['marca']; 
    $modelo=$_POST['modelo'];
    //prepara la insert
    $insert = $nuevoPDO->prepare('INSERT INTO vehiculos (matricula, marca, modelo) VALUES (:matricula, :marca, :modelo)');
    //ejecuta la insert con los datos 
    $insert->execute(
        array(
            'matricula' => $matricula,
            'marca' => $marca,
            'modelo' => $modelo,
        )
        ); 
    }
//Para mostrar la tabla actualizada  
    //preparo la consulta 
    $consulta = $nuevoPDO->prepare('SELECT * FROM vehiculos;');
    //ejecuta la consulta 
    $consulta->execute();
    //ahora imprime la consulta 
    //$mostrar = $consulta->fetchAll();

?>
<html>
<table border="1px">
        <tr>
            <th>Matricula</th>
            <th>Marca</th>
            <th>Modelo</th>
        </tr>
        <?php foreach ($consulta as $posicion => $columna): ?>
        <tr>
           <td> <?= $columna['matricula']; ?> </td>
           <td> <?= $columna['marca']; ?> </td>
           <td> <?= $columna['modelo']; ?> </td>
        </tr>
        <?php endforeach; ?>
    </table>