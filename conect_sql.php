<?php 
// establecer conexion con el SMBD
$my = mysqli_connect ("localhost","root","root","venesupal1984"); 
if (mysqli_connect_error()) // si hay error
    die ("Error de conexi贸n");      
// se establece la codificaci贸n de la conexi贸n
mysqli_query ($my,"SET NAMES utf8");
?>