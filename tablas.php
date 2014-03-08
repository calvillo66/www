<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$a=1; // Por favor no toque
$tablade=9; // <----- Introduzca aqui el número del cual desea la tabla de multiplicar
$hasta=10; // <----- Introduzca aqui el número hasta el cual desea la tabla
$c=$a; // Por favor no toque ;)
do { 
    echo  "<b> $tablade </b>" . "x" . $a++ . "=" . ($c++ * $tablade) . "<br>" ;
    } while ($a<=$hasta);
?>
</body>
</html>