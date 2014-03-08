<?php include("conect_sql.php"); ?> 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
//$username='Diego';//$_POST['username'];
//$password='1';//$_POST['password'];
$sql = "SELECT userName, userCedula FROM user WHERE `userName` = \'prueba\'";
//$sql = "SELECT * FROM `user` WHERE `userName` = \'prueba\'"
$result = mysqli_query ($my,$sql);
?>

<?php 
 $r = mysqli_fetch_array($result);
    list ($username,$cedula) = $r;
    
	echo $username . $cedula . $r  ;

// se cierra la conexion
mysqli_close ($my);
?> 
</body>
</html>