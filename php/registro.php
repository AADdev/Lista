<?php
$name = $_POST['name'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
 
 $conexion =mysql_connect("localhost","deivakov") or die ("Problemas al conectar el servidor");
 mysql_select_db("Listas", $conexion) or die ("error al tratar de conectar");
 
if ($pass == $pass2) {
	mysql_query("INSERT INTO Usuarios (Usuario, Nombre, pass) VALUES ('$user','$name','$pass')"); 
echo'<a href="https://listaphp-deivakov.c9.io"><button type="button">Volver atras</button></a>';
echo "bienvenido ".$name;
}
else{
    
    echo"fallo en el registro";
     
}


?>