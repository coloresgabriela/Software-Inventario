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
for($i=0;$i<sizeof($ID);$i++) {
	$mysqli->query("update inventarios set NOMBRE_DE_PRODUCTO='$NOMBRE_DE_PRODUCTO', REFERENCIA='$REFERENCIA', PRECIO='$PRECIO', PESO='$PESO', CATEGORIA='$CATEGORIA', STOCK='$STOCK', FECHA_DE_CREACION='$FECHA_DE_CREACION', FECHA_ULTIMA_VENTA='$FECHA_ULTIMA_VENTA' where ID ='$ID'");
	echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"2;URL=http://localhost/inventarios/actualizar.php"\">";
}
?>