<?php 
$mysqli = new mysqli('localhost', 'root', '', 'inventarios');
$ID = $_POST['ID'];
$NOMBRE_DE_PRODUCTO = $_POST['NOMBRE_DE_PRODUCTO'];
$REFERENCIA = $_POST['REFERENCIA'];
$PRECIO = $_POST['PRECIO'];
$PESO = $_POST['PESO'];
$CATEGORIA = $_POST['CATEGORIA'];
$STOCK = $_POST['STOCK'];
$FECHA_DE_CREACION = $_POST['FECHA_DE_CREACION'];
$FECHA_ULTIMA_VENTA = $_POST['FECHA_ULTIMA_VENTA']

	mysqli_real_query($mysqli, "insert in to inventarios(NOMBRE_DE_PRODUCTO, REFERENCIA, PRECIO, PESO, CATEGORIA, STOCK, FECHA_DE_CREACION, FECHA_ULTIMA_VENTA) values('$NOMBRE_DE_PRODUCTO', '$REFERENCIA', '$PRECIO', '$PESO', '$CATEGORIA', '$STOCK', '$FECHA_DE_CREACION', '$FECHA_ULTIMA_VENTA')");
	echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"2;URL=http://localhost/inventarios/insertar.php"\">";

?>