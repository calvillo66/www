
<?php 
         
$ine=file_get_contents('http://www.ine.gov.ve/documentos/INE/Tips/Tips.php');// obtiene el numero de ahbitantes de la pagina web del INE
$longIne=strlen($ine);// obtiene la cantidad de caracteres de la variable ine
$noTagsIne= strip_tags($ine); // devuelve el texto de $ine sin etiquetas html ni php
$noBlankTagsIne= trim($noTagsIne);// devuelve el texte de $ine sin espacios en blanco
$subsIne= substr($noBlankTagsIne, -223,200);// devuelve el texto que sale al final del $ine mas o menos desde la fecha
$poText= strstr($subsIne, ":");// devuelve todo lo que hay despues de los dos puntos dentro de la variable $subsIne

$pobVzla=filter_var($poText, FILTER_SANITIZE_NUMBER_INT);// devuelve solo los numeros en $poText 
if ($pobVzla>0){// comprueba si no han cambiado la estructura de la pahina del INE
	$qhabitantes=$pobVzla;}
else $qhabitantes=30000000;// define la poblacion en 30.000 si el resultado sacado de la pagina del INE es algo raro
$qHabitantesForm=number_format($qhabitantes, 0, ',', '.');// le da formato al numero

?>
