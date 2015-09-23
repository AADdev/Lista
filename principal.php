<!DOCTYPE html>
	<head>
		
		<?php session_start(); ?>
		<title>LISTAS</title>
		<meta charset="utf-8"/>
		<script src="lib/jquery-1.11.3.min.js"></script>
		<script src="lib/jquery.validate.min.js"></script>

		<link rel="StyleSheet" href="css/stilo.css" type="text/css">
		<script type="text/javascript">

$(document).ready(function() {
	 $("#linea1").click(function(){
        $("#crearlista").slideToggle("linear");
         $("#sub2").fadeOut('slow/400/fast');
          $("#sub3").fadeOut('slow/400/fast');
         	
    });
	 $("#linea2").click(function(){
        $("#sub2").slideToggle("linear");
         $("#sub1").fadeOut('slow/400/fast');
          $("#sub3").fadeOut('slow/400/fast');
    });
	 $("#linea3").click(function(){
        $("#sub3").slideToggle("linear");
         $("#sub1").fadeOut('slow/400/fast');
          $("#sub2").fadeOut('slow/400/fast');
    });

	  $("#clientes").click(function(){
	  	 $("#instratamiento").fadeOut(0);
	  	 $("#insdentista").fadeOut(0);
	   $("#inscliente").fadeIn("linear");
	    $("#sub1").fadeOut("linear");

    });
   

  $("#tratamientos").click(function(){
  	$("#inscliente").fadeOut(0);
 	$("#insdentista").fadeOut(0);
	   $("#instratamiento").fadeIn("linear");
	    $("#sub1").fadeOut("linear");   
    });
  $("#dentista").click(function(){
  	$("#inscliente").fadeOut(0);
  	$("#instratamiento").fadeOut(0);
	   $("#insdentista").fadeIn("linear");
	    $("#sub1").fadeOut("linear");  
	     $("#sub2").fadeOut("linear");    
    });

});	
		</script>
		
	</head>
	<body>
		
		<div id="banner">
			<div id="logo"></div>
			<div id="bannerletras">
				<h1>Listas</h1>
			</div>
		</div><!--banner-->

		<div id="nav">
		
	<ul>	
		<li id="linea1">crear</li>
	</ul>	
	<ul>	
		<li id="linea2">compartir</li>
			
	</ul>
	<ul>	
		<li id="linea3">eliminar</li>	
		</ul>
			
	</div><!--nav-->
	<form hidden id="crearlista" method="post" action="php/crearlista.php">	
		<h2>Crear una Lista</h2>
		<input type="text" name="nombrelista" placeholder="Nombre de la Lista"/>
		<br/>
		<input type="text" name="task1" placeholder="task1"/>
		<br/>
		<input type="text" name="task2" placeholder="task2"/>
		<br/>
		<input type="text" name="task3" placeholder="task3"/>
		<br/>
		<input type="text" name="task4" placeholder="task4"/>
		<br/>
		<input type="text" name="task5" placeholder="task5"/>
		<br/>
		<input type="submit" value="Submit"/>
	</form>
	
	<?php
	$user = $_SESSION['Usuario'];
	$iduser = $_SESSION['id_usuario'];
	
	$conexion =mysql_connect("localhost","deivakov") or die ("Problemas al conectar el servidor");
 	mysql_select_db("Listas", $conexion) or die ("error al tratar de conectar");
	
	

	
	//nuevo
	   $result3 = mysql_query("select * from usuario_lista where id_usuario = '".$iduser."'", $conexion );
	   while ($row3 = mysql_fetch_array($result3)) {
	   
	   
	   $result = mysql_query("SELECT * FROM lista where id_lista = '".$row3[2]."'", $conexion);
	   
		while ($row = mysql_fetch_array($result)) {
				echo "<div class='CSSTableGenerator'>";
			    echo "<table border='1' class='Tlistas'>";
			    echo "<tr>";
    			echo "<form action='php/borrarl.php' method='post'>";
    			echo "<input type='text' value='$row[0]' name='idl' hidden>";
			    echo "<th>".$row[1]."</th><th><input type='submit' value='borrar'></th>";
			    echo "</form>";
			    echo "</tr>";
			    $result2 = mysql_query("SELECT * FROM tarea WHERE id_lista= '$row[0]' and archivada = 0", $conexion);
			    $X = 1;
			    while ($row2 = mysql_fetch_array($result2)) {
    			    echo "<tr>";
    			    echo "<form action='php/borrart.php' method='post'>";
    			    echo "<input type='text' value='$row2[0]' name='idt' hidden>";
    			    echo "<td>Tarea Nº".$X.": ".$row2[1]."</td><td><input type='submit' value='archivar'></td>";
    			    echo "</form>";
    			    echo "</tr>";
    			    $X++;
			    }
			    echo "</table>";
			    echo "</div>";
			    echo "</br>";
			}
	   }
	
	
	
	?>
	</body>
</html>