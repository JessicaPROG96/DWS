<?php
$alicuota_iva = 21;
$codigo_de_producto = 1284;
$nombre_producto = "Agua Mineral Manantial x 500 ml";
$precio_bruto = 3.75;
$iva = 3.75 * 21 / 100;
$precio_neto = $precio_bruto + $iva;
?>
<!doctype html>
<html>
<head>
<title>Detalles del producto <?php echo $nombre_producto; ?></title>
</head>
<body>
<p><b>Producto:</b> (<?php echo $codigo_de_producto; ?>)
<?php echo $nombre_producto; ?><br/>
<b>Precio:</b> USD <?php echo $precio_neto; ?>.- (IVA incluido)</p>
</body>
</html>