<html>
	<head>
		<title>Eliminar tarea</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<?php 
		
		
		    $user = $_SESSION['Usuario'];
	        $iduser = $_SESSION['id_usuario'];
	        
	        $idt = $_POST['idt'];
	        
			$conexion =mysql_connect("localhost","deivakov") or die ("Problemas al conectar el servidor");
         	mysql_select_db("Listas", $conexion) or die ("error al tratar de conectar");
		
		     mysql_query(" UPDATE tarea SET  `archivada` =  '0' WHERE  id_tarea ='$idt'", $conexion);
		
//		 UPDATE  `Listas`.`tarea` SET  `archivada` =  '0' WHERE  `tarea`.`id_tarea` =105;
		
		      
		header("Location: ../principal.php");
		
		?>
	</body>
</html>