<?php
echo "hola mundo";
include("encabezado.html");

/**Elige un numero del 0 al 5 */
$numero = rand(0,5);
$num = rand(0,5);
$operador=rand(1,10);
echo "<p>el numero es: $numero</p><br>"; 

   /* do{
        if($numero == 0){
        echo "no tiene acceso";
        }
        break; 
        $numero++;                               
    }while($numero==0); 
    */   
    switch ($numero) {
        case 0: 
            echo "no tiene acceso";
            $numero = rand(0,5);
             break;
        case 1:
            echo "Bienvenido"; 
            break;
        case 2:
            /**suma el numero aleatorio con otro que saldrá aleatoriamente menor entre 0 y 5 */
            $suma = $numero + $num;
            echo "la suma es: $suma";
            break;
        case 3:
            echo "<p>La tabla de multiplicar del numero $operador</p><br>";
            for($i=0;$i<=10;$i++){
                echo "$operador x $i = ".$operador*$i."</br>";
            } 
            break;
        case 4:    
             $imagenes = array('f.png','f1.jpg','f2.jpg','f3.jpg','fp.jpg'); 
            $elementos = count($imagenes); 
            echo "<table>";
            for($i=0;$i<$elementos;$i++){
                echo "<tr>"; 
                    echo "<td>".'<img src="'.$imagenes[$i].'" width=70/>'."</td>";
                echo "</tr>";  
            }
            echo "</table>";
            break;
        case 5:
            $valorX = 4; 
            $valorY=2; 
            $vector= "$valorX, $valorY";
            echo "los valores son; $vector"; 
            break;         
    }    
include("footer.html"); 
?>