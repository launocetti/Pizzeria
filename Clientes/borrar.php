<?php 
$url="localhost";
$usuario="root";
$pass="";
$db="negocio";

$con=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");

$sql="SELECT * FROM negocio.clientes WHERE id_cliente = '$_REQUEST[id_cliente]' OR nombre like '$_REQUEST[nombre]' or apellido like '$_REQUEST[apellido]'";

$resultado = mysqli_query($con,$sql);

$sql="DELETE FROM negocio.clientes WHERE id_cliente = '$_REQUEST[id_cliente]' OR nombre like '$_REQUEST[nombre]' or apellido like '$_REQUEST[apellido]'";

$resultado = mysqli_query($con,$sql);

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
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="proveedores.php">Distribuidores</li>
                    <li><a href="#">Insumos</a></li>
                </ul>
            </nav>
			<h3>Eliminado correctamente!</h3>
			<br><br>
			<form action="clientes.php" method="post">
				<input type="submit" value = "Volver a grilla clientes">
			</form>

			</div>
		</div>
</body>
</html>