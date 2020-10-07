<?php
//comprobamos si ha recibido un elemento post 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //si si, recogemos esas variables 
    $matricula=$_POST['matricula'];  
    $marca=$_POST['marca']; 
    $modelo=$_POST['modelo'];
    //preparamos la conexión 
    //variables de conexion 
    $hostDB = '127.0.0.1';
    $nombreDB = 'pruebaphp';
    $usuarioDB = 'root';
    $contrasenyaDB = '';
    //conectarse a la base de datos 
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $nuevoPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
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
<html>
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
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Datos personales</legend>
            <h4>Matricula</h4>
            <input type="text" name="matricula">
            <h4>Marca</h4>
            <input type="text" name="marca">
            <h4>Modelo</h4>
            <input type="text" name="modelo">
            <br>
            <input type="submit" name="guardar">
            <br>
            <input type="reset" name="borrar">
        </fieldset>
    </form>
</body>

</html>