<?php 
$mysqli = new mysqli('localhost', 'root', '', 'inventarios');
$consulta = 'select * from inventarios';
$res = $mysqli->query("SELECT * FROM inventarios");
?>
<html>
<style>
table {

}
button { background:;

}
</style>
<head>
</head>
<body border="1" background="in.png">
<form method="POST" action="insertar.php">

    <div style="position: absolute; background: #FCF3CF;
    height: 40px;
    width: 120%;
    left: 0%;
    top: ;
    margin-top: ;
    margin-left: ;">
    <table style="margin: auto auto;">
    <td align="center" style="text-align: center; font-size: 30px; color: #C0392B"><strong>PAGINA PARA CREAR DATOS</strong></td>
    </table>
    </div>

    <div style="position: absolute; background: #FCF3CF;
    height: 40%;
    width: 120%;
    left: ;
    top: 50%;
    margin-top: -100px;
    margin-left: -10px;
    ">
    <table>
    <tr>
    <td align="center">ID</td>
    <td align="center">Nombre de Producto</td>
    <td align="center">Referencia</td>
    <td align="center">Precio</td>
    <td align="center">Peso</td>
    <td align="center">Categoria</td>
    <td align="center">Stock</td>
    <td align="center">Fecha de Creacion</td>
    <td align="center">Fecha Ultima Venta</td>
    </tr>

    <tr>
    <td aling="center"><input type="text" size="20" name="ID" autocomplete="off" required></td>
    <td aling="center"><input type="text" size="20" name="NOMBRE_DE_PRODUCTO" autocomplete="off" required></td>
    <td aling="center"><input type="text" size="20" name="REFERENCIA" autocomplete="off" required></td>
    <td aling="center"><input type="text" size="20" name="PRECIO" autocomplete="off" required></td>
    <td aling="center"><input type="text" size="20" name="PESO" autocomplete="off" required></td>
    <td aling="center"><input type="text" size="20" name="CATEGORIA" autocomplete="off" required></td>
    <td aling="center"><input type="text" size="20" name="STOCK" autocomplete="off" required></td>
    <td aling="center"><input type="text" size="20" name="FECHA_DE_CREACION" autocomplete="off" required></td>
    <td aling="center"><input type="text" size="20" name="FECHA_ULTIMA_VENTA" autocomplete="off" required></td>
    </tr>
    </table>
    <input type="submit" name="crear">
    </div>
</body>