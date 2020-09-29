<?php
/**Pagina 1 */
SESSION_START(); 
$_SESSION['nombre']="Jessica";
$_SESSION['apellido']="Marroquin"; 
echo "<a href='link a otra página redericción 2'>Ir a página 2<a>"; 

/**Pagina 2 */
//se almacen dos variables de sesión <br>
<a href='link a otra página redericción 2'>Ir a página 3<a>; 

/**Pagina 3 */
SESSION_START(); 
$nom=$_SESSION['nombre'];
$ape=$_SESSION['apellido'];
echo "Varaibles de sesion: <br>";
echo "el nombre es: $nom<br> El apellido es: $ape";

?>