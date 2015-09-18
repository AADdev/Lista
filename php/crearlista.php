<?php
$nombrelista = $_POST['nombrelista'];
$tarea1 = $_POST['task1'];
$tarea2 = $_POST['task2'];
$tarea3 = $_POST['task3'];
$tarea4 = $_POST['task4'];
$tarea5 = $_POST['task5'];

 $conexion =mysql_connect("localhost","deivakov") or die ("Problemas al conectar el servidor");
 mysql_select_db("Listas", $conexion) or die ("error al tratar de bla bla bbla");
 
mysql_query("INSERT INTO lista (Nombre) VALUES ('$nombrelista')"); 

$idlista =mysql_query("select id_lista from lista where Nombre = '".$nombrelista."'", $conexion );
$idl=mysql_fetch_row($idlista);
$idl2= $idl[0];

 
 
mysql_query("INSERT INTO tarea(descripcion,id_lista) VALUES('$tarea1','$idl2')");
mysql_query("INSERT INTO tarea(descripcion,id_lista) VALUES('$tarea2','$idl2')");
mysql_query("INSERT INTO tarea(descripcion,id_lista) VALUES('$tarea3','$idl2')");
mysql_query("INSERT INTO tarea(descripcion,id_lista) VALUES('$tarea4','$idl2')");
mysql_query("INSERT INTO tarea(descripcion,id_lista) VALUES('$tarea5','$idl2')");


?>