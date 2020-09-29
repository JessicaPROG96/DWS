<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //ejemplo 1 
    //ejecutara por lo menos una vez 
    //debe inicializar la variable 
    $var= -1;
    do {
    echo "ejemplo 1 con do while"; 
    //mostrara el contenido de la variable porque aún no ha evaluado si se cumple la condición
    echo ("El valor es: ".$var."<br>");
    //actualiza o altera la condicion/repetición para que se finalice el programa
    $var--;
    } while ($var >= 0  ) ;

    
    //ejemplo 2 
    $i = 6;
    do {
    echo "ejemplo 2 con do while";
     print "<p>$i</p>\n";
        $i++;
    } while ($i < 5);
    
    //el ejemplo 1 pero con while para ver la diferencia
    echo "ejemplo 1 con  while, la propoción al ser falsa sale del programa y no ejecuta la repetición";
    $a = -1;
    while ($a >=0) {
        print "<p>$a</p>\n";
        $a--;
    }
    echo"<br>";
     //el ejemplo 2 pero con while para ver la diferencia
    
     echo "ejemplo 2 con  while, la propoción al ser falsa sale del programa y no ejecuta la repetición";
     $b = 6;
     while ($b < 5) {
         print "<p>$b</p>\n";
         $b++;
     }
    ?>


</body>
</html> 