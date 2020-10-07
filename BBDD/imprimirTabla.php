<html> 
<head>
    <title>Prueba php</title>
</head>
<body>
    <?php
        //variables de conexion 
        $hostDB = '127.0.0.1';
        $nombreDB = 'pruebaphp';
        $usuarioDB = 'root';
        $contrasenyaDB = '';
        //conectarse a la base de datos 
        $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
        $nuevoPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
        //preparo la consulta 
        $consulta = $nuevoPDO->prepare('SELECT * FROM vehiculos;');
        //ejecuta la consulta 
        $consulta->execute();
        //ahora imprime la consulta 
        $mostrar = $consulta->fetchAll();
        //para mostrar cada uno de los elementos hace un recorrido uno a uno 
        // foreach ($mostrar as $posicion => $columna) {
        // echo $columna['matricula'];
        // }
        // $nuevoPDO  = null;
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
    <?php $nuevoPDO  = null; ?>

</body>
</html>