<?php
$confirmar=$_POST['confirmacion'];

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

?>