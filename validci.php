
<?php
/* El objetivo de este programa es validar si la cedula de identidad fue correctamente introducida
Se realizaran las siguientes validaciones:
1. Si el dato fue enviado 
2. Cantidad de digitos de la cedula
3. Si es venezolano o extranjero
4. Si no excede la cantidad de habitantes en Vzla
5. en un futuro nos conectaremos con la base de datos del CNE
*/
include_once("poblacion_vzla.php");// esta es la comprobacion de que el numero de cedula no excede el numero de habitantes que arroja el INE
$advertenciaNoPaso=' Ooooops parece que no paso primero por el formulario ;) haga click <a href="registration_form.html" target="_self">aquí</a><br>';// adevertencia en caso de que no venga del formulario
$ci=(filter_var($_POST["ci"], FILTER_SANITIZE_NUMBER_INT)); // obtiene ci y solo devuelve los numeros
$nation=($_POST["nation"]);
$qci= strlen($ci); //esta variable define la cantidad de digitos de la cedula para usarlo en "2."
if (!isset($_POST["ci"])){ // 1. condicional el dato fue enviado 
	echo $advertenciaNoPaso;
}
	elseif ($qci<6) { //2.Comprobación de cantidad de digitos de la Cedula
		echo '(Error 1.1) No es posible que usted tenga ese número de cedula, el número de debe ser mayor de 99.999, si tiene dudas haga <a href="ayuda.html" title="Ayuda" target="_blank">click aquí</a>"<br>';
	}
	elseif($ci>$qhabitantes){//4. comprobación si el número no excede la cantidad de habitantes del país
	echo '(Error 1.2) No es posible que usted tenga ese número de cedula, el número excede el mayor número registrado en el país según el I.N.E Venezuela tiene: '. $qHabitantesForm .  ' habitantes , si tiene dudas haga <a href="ayuda.html" title="Ayuda" target="_blank">click aquí</a>"<br>';
		} 
	elseif  ($nation=='I'){
	echo "Lo sentimos mucho pero si usted no tiene documentos no puede trabajar para VENESUPAL" ;}// imprime el error en caso de que el usuario seleccione indocumentado
	else {$formatCi=number_format($ci, 0, ',', '.');// Le da formato al numero 
		echo "Muchas gracias hemos registrado el Número de Cedula: " . $nation ." - " . $formatCi;}// muestra el numero de ci formateado
?>
