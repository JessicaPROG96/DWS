<?php
//funciona solo en arrays 
//permite sacar los elementos o rrecor un array 
$numeros=array("cero", "uno", "dos","tres","cuatro");
echo "los números son:<br> ";
//coge cada uno de los elementos que estan en el array
//los agrega una variable que se llama nombre
foreach ($numeros as $nombre)
echo "$nombre<br>";

//saca cada uno de los elementos incluyendo su indice 
$numeros=array("cero", "uno", "dos","tres","cuatro");
foreach ($numeros as $cla=>$nombre)
echo "la clave: $cla y valor es $nombre<br>";
?>