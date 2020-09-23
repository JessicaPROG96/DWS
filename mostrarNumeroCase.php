<html>
<body>
<?php 
$numero = rand(1,10); //numero aleatorio
if($numero>=1 && $numero<=10){
switch ($numero) {
    case 1:
        print "<p>El numero es uno </p>";
        break;
    case 2:
        print "<p>El numero es dos </p>";
        break;    
    case 3:
        print "<p>El numero es tres </p>";
        break;  
    case 4:
        print "<p>El numero es cuatro </p>";
        break;  
    case 5:
        print "<p>El numero es cinco </p>";
        break;  
    case 6:
        print "<p>El numero es seis </p>";
        break; 
    case 7:
        print "<p>El numero es siete </p>";
        break;   
    case 8:
        print "<p>El numero es ocho </p>";
        break;  
    case 9:
        print "<p>El numero es nueve </p>";
    break;  
    default:
    print "<p>El numero es diez </p>";
        break;
}
}
?>
</body>
</html>