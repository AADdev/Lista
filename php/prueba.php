<!DOCTYPE html>
<html>
    <head>
        <?php session_start(); ?>
    </head>
    <body>
        <?php
        	$user = $_SESSION['Usuario'];
        	$iduser = $_SESSION['id_usuario'];
        	
        	$conexion =mysql_connect("localhost","deivakov") or die ("Problemas al conectar el servidor");
         	mysql_select_db("Listas", $conexion) or die ("error al tratar de conectar");
         
            $result = mysql_query("SELECT * FROM lista", $conexion);
            
			while ($row = mysql_fetch_array($result)) {
			    echo "<table border='1'>";
			    echo "<tr>";
			    echo "<th>Nombre de la lista: ".$row[1]."</th>";
			    echo "</tr>";
			    $result2 = mysql_query("SELECT * FROM tarea WHERE id_lista = '$row[0]'", $conexion);
			    while ($row2 = mysql_fetch_array($result2)) {
    			    echo "<tr>";
    			    echo "<td>Nombre de la tarea: ".$row2[1]."</td>";
    			    echo "</tr>";
			    }
			    echo "</table>";
			    echo "</br>";
			}
        ?>
    </body>
</html>