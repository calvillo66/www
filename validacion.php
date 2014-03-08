<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$mail='12ee52e4567890.com'; // este es el correo
$com=strstr ($mail,"." ); // este es devuelve la terminacion despues del punto
$placedominio= strpos($mail,"@"); // este devueleve la posicion del arroba
$dominio= strrchr($mail,"@"); // este devueleve todo el dominio
$login= substr($mail,0,$placedominio); // este devuelve todo el login
$qcom= strlen($com);
$qlogin= strlen($login);
$qdominio= strlen($dominio)-$qcom-1;
$puntocom= substr_count ($mail, ".");
if ($placedominio>0){
    echo "";}
else {echo 'ERROR:Todos los correos deben contener en caracter <b>"@"</b> antes del dominio. <BR>';}

 if ($qlogin>=3 and $qlogin<=6 ) 
    echo "";
else{ echo 'ERROR: El nombre de usuario debe tener entre <b>"3 y 6"</b> caracteres.<BR>';}
if ($qdominio>=1 and $qdominio<=10 ) 
    echo "";
else{ echo 'ERROR: El dominio del correo debe tener entre <b>"1 y 10"</b> caracteres.<BR>';}
if ($puntocom>=1) {
    echo "";}
else { echo 'ERROR: Debe tener el caracter <b>"."</b> antes del "com".<BR>';}
if($com==".com") {
    echo "";}
else { 
    echo 'ERROR: Solo se admite <b>".com"</b> como extencion valida.<BR>';}

?>
</body>
</html>