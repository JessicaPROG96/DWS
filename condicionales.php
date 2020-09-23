<?php 
//Estructuras de control condionales
//de una única condición 
$a = 10;
if ($a == 10) {
echo "a es igual a 10";
}
//si una condición se cumple y la otra no 
$a = 11;
if ($a == 10) {
echo "a es igual a 10";
} else {
echo "a NO es igual a 10";
}
//evaluar más de una condición 
$a = 15;
if ($a == 10) {
echo "\$a es igual a 10";
} else if ($a == 12) {
echo "\$a es igual a 12";
} else if ($a == 15) {
echo "\$a es igual a 15";
}
//cubrir todas las posibilidades
$a = 15;
if ($a == 10) {
echo "\$a es igual a 10";
} else if ($a == 12) {
echo "\$a es igual a 12";
} else if ($a == 15) {
echo "\$a es igual a 15";
} else {
echo "\$a NO es ni 10 ni 12 ni 15";
}
?>
