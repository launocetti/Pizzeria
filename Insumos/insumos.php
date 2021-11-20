<?php
	$url="localhost";
	$usuario="root";
	$pass="";
	$db="negocio";
	
	$conexion=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");
	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="../Styles/Stylesheet.css" />
    </head>
    <body>
		<div id="wrapper">
			<div id="banner"></div>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="../Proveedores/proveedores.php">Distribuidores</li>
                    <li><a href="insumos.php">Insumos</a></li>
                </ul>
            </nav>
			<div id="content_area">
				<table border="1">
					<tr>
						<td></td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>DNI</td>
						<td>Calle</td>
						<td>Altura</td>
						<td>Barrio</td>
						<td>Localidad</td>
						<td>Tarjeta debito</td>
						<td>Nro mercado pago</td>
					</tr>

					<?php
					$sql="SELECT * FROM clientes";
					$result=mysqli_query($conexion, $sql);
					
					while ($mostrar=mysqli_fetch_array($result)) {
					?>

					<tr>
						<td><?php echo $mostrar['id_cliente'] ?></td>
						<td><?php echo $mostrar['nombre'] ?></td>
						<td><?php echo $mostrar['apellido'] ?></td>
						<td><?php echo $mostrar['dni'] ?></td>
						<td><?php echo $mostrar['calle'] ?></td>
						<td><?php echo $mostrar['altura'] ?></td>
						<td><?php echo $mostrar['barrio'] ?></td>
						<td><?php echo $mostrar['localidad'] ?></td>
						<td><?php echo $mostrar['nro_tarjeta_debito'] ?></td>
						<td><?php echo $mostrar['nro_mercado_pago'] ?></td>
					</tr>

					<?php 
					}
					?>
				</table>
				<br><br>

				<h3> Consulta Insumos </h3>
				<form action="consulta_especifica_cliente.php" method="post">
					Por id:  <input type="text" name = "id_cliente">
					<br>
					Por nombre: <input type="text" name = "nombre">
					<br>
					Por apellido: <input type="text" name = "apellido">
					<br>
					<br>
					<input type="submit" value = "consulta">
				</form>


				<h3> Insertar Insumos </h3>
				<form action="insertar_cliente.php" method="post">
					<input type="submit" value = "Insertar">
				</form>

				<h3> Eliminar Insumos </h3>
				<form action="eliminar_cliente.php" method="post">
					<input type="submit" value = "Eliminar">
				</form>

				<h3> Actualizar Insumos </h3>
				<form action="actualizar_cliente.php" method="post">
					<input type="submit" value = "Actualizar">
				</form>
				<!--
				<h2> Insertar cliente </h2>
				<form action="insertar.php" method="post">
					nombre <input type="text" name="nombre">
					<br>
					apellido <input type="text" name="apellido">
					<br>
					dni <input type="number" name="dni">
					<br>
					calle <input type="text" name="calle">
					<br>
					altura <input type="text" name="altura">
					<br>
					barrio <input type="text" name="barrio">
					<br>
					localidad <input type="text" name="localidad">
					<br>
					nro_tarjeta_debito <input type="text" name="nro_tarjeta_debito">
					<br>
					nro_mercado_pago <input type="text" name="nro_mercado_pago">
					<br>
					<br>
					<input type="submit" value="Enviar">
				</form>

				<h2> Consultar clientes </h2>
				<form action="consultar.php" method="post">
					<input type = "submit" value = "Consultar">
				</form> 
				<p> Consulta especifica </p>
				<form action="ce.php" method="post">
					Por id:  <input type="text" name = "id_cliente">
					<br>
					Por nombre: <input type="text" name = "nombre">
					<br>
					Por apellido: <input type="text" name = "apellido">
					<br>
					<br>
					<input type="submit" value = "consulta">
				</form>
				<h2>Eliminar cliente</h3>
				<form action = "borrar.php">
					Por id:  <input type="text" name = "id_cliente">
					<br>
					Por nombre: <input type="text" name = "nombre">
					<br>
					Por apellido: <input type="text" name = "apellido">
					<br>
					<br>
					<input type="submit" value="Eliminar">
				</form>
				
				<h2> Actualizar cliente</h4>
				<form action="actualizar.php" method="post">
					<p> Ingrese el id del cliente.. </p>
					id_cliente <input type="number" name="id_cliente"> 
					<br>
					<p> Ingrese el valor de los campos a modificar.. <p>	
					nombre <input type="text" name="nombre">
					<br>
					apellido <input type="text" name="apellido">
					<br>
					dni <input type="number" name="dni">
					<br>
					calle <input type="text" name="calle">
					<br>
					altura <input type="text" name="altura">
					<br>
					barrio <input type="text" name="barrio">
					<br>
					localidad <input type="text" name="localidad">
					<br>
					nro_tarjeta_debito <input type="text" name="nro_tarjeta_debito">
					<br>
					nro_mercado_pago <input type="text" name="nro_mercado_pago">
					<br>
					<br>
					<input type="submit" value="Actualizar valores">
				</form>

				-->
			</div>
			
		</div>
</body>
</html>