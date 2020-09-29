<?php
function calcularPotencia ($n1,$n2){
   return $n1**$n2;
}
echo "<table>";
for($i=1;$i<=4;$i++){
    echo "<tr>";
    for($c=1;$c<=4;$c++){
        echo "<td>". calcularPotencia($i,$c) ."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>