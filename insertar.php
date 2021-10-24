<?php 
$url="localhost";
$usuario="root";
$pass="";
$db="negocio";

$con=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");

$sql="insert into negocio.clientes (nombre,apellido,dni,calle,altura,barrio,localidad,nro_tarjeta_debito,nro_mercado_pago) values ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[dni]','$_REQUEST[calle]',$_REQUEST[altura],'$_REQUEST[barrio]','$_REQUEST[localidad]','$_REQUEST[nro_tarjeta_debito]','$_REQUEST[nro_mercado_pago]')";

mysqli_query($con,$sql);
mysqli_close($con);
echo "se guardo el registro con exito";
echo "<br>";
echo "<br>";
echo '<a href="http://localhost/" class="button">Volver al inicio</a>';

?>