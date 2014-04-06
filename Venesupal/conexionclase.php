<?php
$con=mysqli_connect("localhost","temporal1","1234","prueba1");
// 
//$con <-variable =mysqli_connect<-funcion de acceso de php a my sql("localhost"<- nombre del servidor,"root"<- username,""<- clave de temporal1,"my_db"<- base de datos);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="INSERT INTO Persons (FirstName, LastName, Age)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?> 