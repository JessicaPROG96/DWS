<?php
$n = 4;
while ($n <= 5) {
//echo $n . chr(10);
echo $n;
$n++; // incremento el valor de $n en 1. Equivale a $n = $ + 1;
}

$years = array();
$year = 1990;
while ($year <= 2000) {
$years[] = $year;
$year++;
}
print_r($years);


?>