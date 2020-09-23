<?php
$codigo_de_producto = 1284;
$nombre_producto = "Agua Mineral Manantial x 500 ml";
$precio = 3.75;
$vence = False;
$hay_stock = True;
$stock_en_deposito_1 = 20;
$stock_en_deposito_27 = 5;
$stock_en_deposito_73A = 54;
echo "<p>El producto se llama $nombre_producto se encuentra con el siguiente codigo $codigo_de_producto </p>"; 
/*Concatenar variables*/
$nombre_de_producto_por_defecto = "Producto";
$nombre_producto = $nombre_de_producto_por_defecto . " en oferta";
echo $nombre_producto; // imprime: Producto en oferta
/*Conocer el tipo y el valor de una variable */
$producto = "Coca-Cola x 1,5 Lts.";
var_dump($producto);
# salida: string(20) "Coca-Cola x 1,5 Lts."
/**Imprimir el tipo de variable sin mostrar el valor de la variable */
$a = 25;
$tipo_a = gettype($a);
echo $tipo_a; #imprimirá integer
?>