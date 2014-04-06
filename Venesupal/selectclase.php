<?php
$con=mysqli_connect("localhost","venesupal2","1234","venesupal1984");
// 
//$con <-variable =mysqli_connect<-funcion de acceso de php a my sql("localhost"<- nombre del servidor,"root"<- username,""<- clave de temporal1,"my_db"<- base de datos);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$usuario=$_POST['user'];
$password=$_POST['pass'];
echo $usuario . "  " . $password ; 

$result = mysqli_query($con,"SELECT * FROM user WHERE (userName='$usuario') and userCedula='$password'");

while($row = mysqli_fetch_array($result))
  {
  echo $row['userName'] . " " . $row['userCedula'];
  echo "<br>";
  }

mysqli_close($con);
?> 