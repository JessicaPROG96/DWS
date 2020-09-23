<html>
<body>
<?php 

//$numero = 2; 
$numero = rand(1,10); //numero aleatorio

if($numero>=1 && $numero<=10) {

    if ($numero == 1) {
        print "<p>El numero es uno </p>"; }
    else if ($numero == 2) {
        echo "El numero es dos "; }
    else if ($numero == 3) {
        echo "El numero es tres "; }
    else if ($numero == 4) {
        echo "El numero es cuatros "; }    
    else if ($numero == 5) {
        echo "El numero es cinco "; }
    else if ($numero == 6) {
        echo "El numero es seis "; }
    else if ($numero == 7) {
        echo "El numero es siete "; }
    else if ($numero == 8) {
        echo  "El numero es ocho "; }
    else if ($numero == 9) {
        echo  "El numero es nueve "; }
    else if ($numero == 10) {
        echo  "El numero es diez "; }
}

else { echo  "El numero no esta entre 1 y 10 "; }


?>
</body>
</html>