<?php
// Variables
$hostDB = '127.0.0.1';
$nombreDB = 'ejemplo';
$usuarioDB = 'root';
$contrasenyaDB = '';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// Obtiene codigo del libro a borrar
$codigo = isset($_REQUEST['codigo']) ? $_REQUEST['codigo'] : null;
// Prepara DELETE
$miConsulta = $miPDO->prepare('DELETE FROM libros WHERE codigo = :codigo');
// Ejecuta la sentencia SQL
$miConsulta->execute([
    codigo => $codigo
]);
?>