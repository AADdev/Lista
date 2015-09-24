<html>
	<head>
		<title>compartir tarea</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<?php 
		
			$conexion =mysql_connect("localhost","deivakov") or die ("Problemas al conectar el servidor");
         	mysql_select_db("Listas", $conexion) or die ("error al tratar de conectar");
	
		    $user = $_SESSION['Usuario'];
	        $iduser = $_SESSION['id_usuario'];
	        $userc = $_POST["usuarioc"];
	        $listac = $_POST["nombrelista"];
	        
	        $result = mysql_query("select id_lista from lista where Nombre = '".$listac."'", $conexion );

	   	    $row3 = mysql_fetch_array($result);
	   	    $idl = $row3[0];
	   	// echo $row3[0];
	   	    
	        $result2 = mysql_query("select id_usuario from Usuarios where Usuario = '".$userc."'", $conexion );
	          $row4 = mysql_fetch_array($result2);
	         $idu = $row4[0];
	        
	         
	    	mysql_query("INSERT INTO usuario_lista(id_usuario,id_lista) VALUES('$idu','$idl')");
		
	
	      
	      
		header("Location: ../principal.php");
		
		?>
	</body>
</html>