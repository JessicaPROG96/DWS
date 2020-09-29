<?php
/**el bucle for es una repetitiva 
parecida al while 
con la diferencia de que es más compacto en el código 
y se ejecuta un número determinado de veces, de 1 a n.

Esta formada por tres parametros
1) inicialización de la variable
2) condición de fin (preposición)
3) la actualización o modificación de la variable*/
for ($i=1; $i <=5 ; $i++) { 
    echo $i."<br>";
}
echo "<br>";
/* ejemplo 1 */
for ($i = 1; $i <= 10; $i++) {
    print $i;
    }
echo "<br>";
/* ejemplo 2 */
for ($i = 1; ;$i++) {
    if ($i > 10) {
    break;
}
print $i;
}
echo "<br>";
/* ejemplo 3 */
for ($i = 1; $i <= 10; print $i, $i++) ;

//Sacar por pantalla los números pares que hay del 5 al 50 
//separados por comas.
for ($i=5; $i <=50 ; $i++) { 
    if($i%2==0){
        echo $i.",";
    }

}
//tabla de multiplicar
for($i=1;$i<=10;$i++){
    for ($j=1; $j <=10 ; $j++) { 
        echo "$i x $j"."=".$i*$j."<br>";
    }
}

?>