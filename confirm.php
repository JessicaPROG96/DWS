<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recoge y guarda los datos</title>
</head>
<body>   
    <?php
        $nombre=$_POST['nombre'];
        $direccion=$_POST['direccion'];
        $correo=$_POST['correo'];
        $contrasena=$_POST['contrasena'];
        $fNacimiento=$_POST['fNacimiento'];
        $sexo=$_POST['sexo'];
        $temas=$_POST['temas'];
        $aficiones=$_POST['aficiones'];
        

        session_start();
        $_SESSION["nombre"] = $nombre;
        $_SESSION["direccion"] = $direccion;
        $_SESSION["correo"] = $correo;
        $_SESSION["contrasena"] = $contrasena;
        $_SESSION["fnacimiento"] = $fNacimiento;
        $_SESSION["sexo"] = $sexo;
        $_SESSION["temas"] = $temas;
        $_SESSION["aficiones"] = $aficiones;

        echo "El nombre completo es $nombre <br>";
        echo "La direccion es $direccion <br>";
        echo "El correo es $correo <br>";
        echo "El la contraseña es $contrasena <br>";
        echo "La fecha de nacimiento es $fNacimiento <br>";
        echo "El sexo es $sexo <br>";
        foreach ($temas as $tema){
        echo "Temas de interes $tema <br>";
        }
        echo "Sus aficiones $aficiones <br>";

        echo '
        <form action="output.php" method="POST">
        <h4>Confirme su infromacion</h4>
        <input type="button" name="confirmacion" value="Confirmar">  
         </form>';

    ?>

    
</body>
</html>