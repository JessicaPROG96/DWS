<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recoge y guarda los datos</title>
</head>
<body>   
    <?php
        $Lnombre = "Jessica";
        $Lapellido = "Mar";

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];

        if($nombre==$Lnombre && $apellido==$Lapellido){
            echo "<p> Bienvenid@  $nombre $apellido </p>";
                session_start();
                $_SESSION['nombre'] = $Lnombre;
                $_SESSION['apellido'] = $Lapellido;
            /*echo "<a href='ej8Sesion3.php'>Ir a página 3<a>";*/
        echo '
        <form action="ej8Sesion3.php" method="POST">
        <h4>Confirme su email</h4>
        <input type="email" name="correo" value="">  
        <input type="submit" name="enviar">
        <input type="reset" name="borrar">
         </form>'; 
        }
        else {
            echo "no tienen permisos";
        }
    ?>

    
</body>
</html>