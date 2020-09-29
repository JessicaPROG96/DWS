<html>
<body>

<h1>Usando include</h1>


<?php include 'encabezado.html';?>
<?php include 'footer.html';?>
<?php 
$numero =rand (0,5);
do
    if($numero==0){
        echo "No tiene acceso";
        break;
    }
while($numero <=5){
   if($numero==1){
        echo "el numero es 1";
    }
    elseif($numero==2){
        echo "el numero es 2";
    }
    elseif($numero==3){
        echo "el numero es 3";
    }
    elseif($numero==4){
        echo "el numero es 4";
    }
    elseif($numero==5){
        echo "el numero es 5";
    }
}


?>

</body>
</html>