
<?php
$Lcorreo = "jes@gmail.com"; 
//cogo el correo 
$correo=$_POST['correo'];

if($correo == $Lcorreo){
echo "Hola, estoy aquí:<br>";
SESSION_START(); 
$email=$_SESSION['correo'];
$nombre=$_SESSION['nombre'];
$apellido=$_SESSION['apellido'];
echo "Varaibles de sesion:<br>";
echo "El nombre es: $nombre <br>";
echo "El apellido es: $apellido <br>";
echo "el correo es: $email <br>";

}
else{
    echo "no tiene aceeso";
}
?>