<?php 
$url="localhost";
$usuario="root";
$pass="";
$db="negocio";

$con=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");

$sql="UPDATE negocio.clientes SET 
      nombre = '$_REQUEST[nombre]',  
      apellido = '$_REQUEST[apellido]',
      dni = '$_REQUEST[dni]',
      calle = '$_REQUEST[calle]',
      altura = '$_REQUEST[altura]',
      barrio = '$_REQUEST[barrio]',
      localidad = '$_REQUEST[localidad]',
      nro_tarjeta_debito = '$_REQUEST[nro_tarjeta_debito]',
      nro_mercado_pago = '$_REQUEST[nro_mercado_pago]'
      WHERE id_cliente = '$_REQUEST[id_cliente]'";

$resultado = mysqli_query($con,$sql);

mysqli_close($con);
echo "<br>";
echo "Datos actualizados correctamente";
echo "<br>";
echo "<br>";
echo '<a href="http://localhost/Pizzeria/index.php" class="button">Volver al inicio</a>';

?>