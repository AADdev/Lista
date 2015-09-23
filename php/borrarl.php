<html>
	<head>
		<title>Eliminar tarea</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<?php 
	
		    $user = $_SESSION['Usuario'];
	        $iduser = $_SESSION['id_usuario'];
	        
	        $idl = $_POST['idl'];
	        
			$conexion =mysql_connect("localhost","deivakov") or die ("Problemas al conectar el servidor");
         	mysql_select_db("Listas", $conexion) or die ("error al tratar de conectar");
		
		     mysql_query("DELETE FROM lista WHERE id_lista = '$idl'", $conexion);
		
//		 UPDATE  `Listas`.`tarea` SET  `archivada` =  '0' WHERE  `tarea`.`id_tarea` =105;
		//DELETE FROM `Listas`.`lista` WHERE `lista`.`id_lista` = 38"
		      
		header("Location: ../principal.php");
		
		?>
	</body>
</html>