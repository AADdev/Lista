<html>
	<head>
		<title>LOGIN</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<?php session_start(); ?>
		<?php $conexion =mysql_connect("localhost","deivakov") or die ("Problemas al conectar el servidor"); ?>
 	    <?php mysql_select_db("Listas", $conexion) or die ("error al tratar de conectar"); ?>
		<?php $usuario = $_POST["usuario"]; ?>
		<?php $pass = $_POST["pass"]; ?>
		<?php $sql = mysql_query("SELECT * FROM Usuarios WHERE Usuario='".$usuario."' AND pass='".$pass."'", $conexion ); ?>
		<?php if($row = mysql_fetch_array($sql)) { ?>
			<?php $_SESSION['id_usuario'] = $row['id_usuario']; ?>
			<?php $_SESSION['Usuario'] = $row['Usuario']; ?>
			<?php $_SESSION['Nombre'] = $row["Nombre"]; ?>
			<?php $_SESSION['pass'] = $row['pass']; ?>
			<?php header("Location: ../principal.php"); ?>
		<?php } ?>
	</body>
</html>