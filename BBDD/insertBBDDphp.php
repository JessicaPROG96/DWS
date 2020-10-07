<html> 
<head>
    <title>Prueba php</title>
</head>
<body>
    <?php
        //variables de conexion 
        
    try {//probelemas de conexión 
            $hostDB = '127.0.0.1';
            $nombreDB = 'pruebaphp';
            $usuarioDB = 'root';
            $contrasenyaDB = '';
            //conectarse a la base de datos 
            $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
            $nuevoPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
            $nuevoPDO->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch(PDOException $e) {
        echo "Se ha producido un error al intentar conectar al servidor MySQL: ".$e->getMessage();
    }
    //insertar un nuevo elemento 
    $insert = $nuevoPDO->prepare('INSERT INTO vehiculos (matricula, marca, modelo) VALUES ("4444TTT", "T1", "TO11")');
    // Ejecuta INSERT con los datos
    $insert->execute();

    try {//probelemas al hacer la consulta  
            //preparo la consulta 
            $consulta = $nuevoPDO->prepare('SELECT * FROM vehiculos;');
            //ejecuta la consulta 
            $consulta->execute();
            //ahora imprime la consulta 
            $mostrar = $consulta->fetchAll();
    }
    catch(PDOException $c) {
        echo "Se ha producido un error al intentar realizar la consulta: ".$c->getMessage();
    }

    ?>
    <table border="1px">
        <tr>
            <th>Matricula</th>
            <th>Marca</th>
            <th>Modelo</th>
        </tr>
        <?php foreach ($mostrar as $posicion => $columna): ?>
        <tr>
           <td> <?= $columna['matricula']; ?> </td>
           <td> <?= $columna['marca']; ?> </td>
           <td> <?= $columna['modelo']; ?> </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>