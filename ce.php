<?php 
$url="localhost";
$usuario="root";
$pass="";
$db="negocio";

$con=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");

$sql="SELECT * FROM negocio.clientes WHERE id_cliente = '$_REQUEST[id_cliente]' OR nombre like '$_REQUEST[nombre]' or apellido like '$_REQUEST[apellido]'";

$resultado = mysqli_query($con,$sql);

while($r=mysqli_fetch_array($resultado)){
	echo "id_cliente:  ".$r[0]."<br>";
	echo "nombre:  ".$r[1]."<br>";
	echo "apellido:  ".$r[2]."<br>";
	echo "dni:  ".$r[3]."<br>";
	echo "calle:  ".$r[4]."<br>";
	echo "altura:  ".$r[5]."<br>";
	echo "barrio:  ".$r[6]."<br>";
	echo "localidad:  ".$r[7]."<br>";
	echo "nro_tarjeta_debito:  ".$r[8]."<br>";
	echo "nro_mercado_pago:  ".$r[9]."<br>";
	echo "<hr> </hr>";
} 

mysqli_close($con);
echo "<br>";
echo "Operacion realizada con exito";
echo "<br>";
echo "<br>";
echo '<a href="http://localhost/" class="button">Volver al inicio</a>';

?>