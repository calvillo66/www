<?php include("conect_sql.php"); ?> 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Procesar Datos</title>
</head>

<body>
<?php
/* Se realizaran las siguientes validaciones:
1. Si el dato fue enviado 
2. Cantidad de digitos de la cedula
3. Si es venezolano o extranjero
4. Si no excede la cantidad de habitantes en Vzla
5. en un futuro nos conectaremos con la base de datos del CNE
*/
include_once("poblacion_vzla.php");// esta es la comprobacion de que el numero de ceudla no excede el numero de habitantes
$advertenciaNoPaso=' Ooooops parece que no paso primero por el formulario ;) haga click <a href="registration_form.html" target="_self">aquí</a><br>';// adevertencia en caso de que no venga del formulario
$ci=(filter_var($_POST["ci"], FILTER_SANITIZE_NUMBER_INT)); // obtiene ci y solo devuelve los numeros
$nation=($_POST["nation"]);
$phone=($_POST["phone"]);
$qci= strlen($ci); //esta variable define la cantidad de digitos de la cedula para usarlo en "2."
$name=($_POST["name"]);// alMACEena el nombre en una variable
$Name= ucfirst($name);//coloca la primera letra del nobre en mayusculas
$numName=filter_var($name, FILTER_SANITIZE_NUMBER_INT);// muestra los numeros en la variable name
$qName= strlen($Name);//esta variable define la cantidad de caracteres de el nombre
$lastName=($_POST["lastname"]);
$LastName=ucfirst($lastName);//coloca la primera letra del apellido en mayusculas
$numLastName=filter_var($LastName, FILTER_SANITIZE_NUMBER_INT);// muestra los numeros en la variable Lastname
$qLastName= strlen($LastName);//esta variable define la cantidad de caracteres de el apellido
$numPhone=filter_var($phone, FILTER_SANITIZE_NUMBER_INT);// Convierte el numero de telefono a puros numeros
$qPhone=strlen($numPhone);//extrae la cantidad de caracteres del telefono
$iniPhone=substr($numPhone,0,4);//extrae el codigo de area del telefono para celulares
$iniPhoneLoc=substr($numPhone,0,2);//extrae el codigo de area del telefono para celulares
$ePhone=($_POST["phoneEmergency"]);
$numEPhone=filter_var($ePhone, FILTER_SANITIZE_NUMBER_INT);// Convierte el numero de telefono a puros numeros
$qEPhone=strlen($numEPhone);//extrae la cantidad de caracteres del telefono
$iniEPhone=substr($numEPhone,0,4);//extrae el codigo de area del telefono para celulares
$iniEPhoneLoc=substr($numEPhone,0,2);//extrae el codigo de area del telefono para celulares
date_default_timezone_set(America/Caracas);// fija la zona horaria en caracas
$birthDay=($_POST["day"]);// captura el dia de nacimiento del formulario
$birthMonth=($_POST["month"]); // captura el mes de nacimiento del formulario
$birthYear=($_POST["year"]); // captura el año de nacimiento del formulario
$diaBirthday1970=mktime(0,0,0,$birthMonth,$birthDay,$birthYear);// arroja los segundos que han pasado desde 1970 hasta naciemiento
$diaToday=(mktime());// arroja los segundos que han pasado desde 1970 hasta hoy
$edadYears=((($diaToday-$diaBirthday1970))/60/60/24/365); // resta ambos segundos y el resultado lo convierte en años
$mail=($_POST['email']);//captura el email
$com=strstr ($mail,"." ); // este es devuelve la terminacion despues del punto
$placedominio= strpos($mail,"@"); // este devueleve la posicion del arroba
$dominio= strrchr($mail,"@"); // este devueleve todo el dominio
$login= substr($mail,0,$placedominio); // este devuelve todo el login
$qcom= strlen($com);
$qlogin= strlen($login);// devuelve la cantdad de caracteres del login
$qdominio= strlen($dominio)-$qcom-1;
$puntocom= substr_count ($mail, ".");
$userName= ($_POST['username']);//captura el USERNAME
$qUserName=strlen($userName);// devuelve la cantdad de caracteres del username
$password= ($_POST['password']);
$qPassword= strlen($password);// devuelve la cantdad de caracteres del password
$password2=($_POST['password2']);//captura el segundo password


 



echo $birthday;
if (!isset($_POST["ci"])){ // 1. condicional el dato fue enviado 
	echo $advertenciaNoPaso;
}
	elseif ($qci<6) { //2.Comprobación de cantidad de digitos de la Cedula
		include_once("error1_1.html");//incluye el archivo html del error 1.1
	}
	elseif($ci>$qhabitantes){//4. comprobación si el número no excede la cantidad de habitantes del país
	include_once("error1_2.php");
		} 
	elseif  ($nation=='I'){
	 include_once("error_indocumentado.php");// imprime el error en caso de que el usuario seleccione indocumentado
	}
	elseif(!isset($_POST["name"])){ // 1. condicional el dato fue enviado 
	echo $advertenciaNoPaso;// adevertencia si el dato no fue enviado
	}
	elseif ($numName!="") {
      echo "El nombre no puede contener números, no puede ser de menos de 3 carácteres ni más de 30";// validación de los tipos y # de caracteres del nombre
	}
	elseif ($qName<3) { //2.Comprobación de cantidad de carateres del nombre
		echo "El nombre no puede contener números, no puede ser de menos de 3 carácteres ni más de 30";
	}
	elseif ($numLastName!="") {
      echo "El Apellido no puede contener números, no puede ser de menos de 3 carácteres ni más de 30";// validación de los tipos y # de caracteres del nombre
	}
	elseif ($qLastName<3) { //2.Comprobación de cantidad de carateres del nombre
		echo "El Apellido no puede contener números, no puede ser de menos de 3 carácteres ni más de 30";
	}
	elseif ($qPhone!=11) { //2.Comprobación de cantidad de carateres del nombre
		echo "El número de teléfono en el campo teléfono de contacto debe ser tener 11 caracteres, Ejemplo 04241874822";
	}
	elseif ($iniPhoneLoc!="02" xor $iniPhone!="0424" xor $iniPhone!="0426" xor $iniPhone!="0422" xor $iniPhone!="0414" xor $iniPhone!="0416" xor $iniPhone!="0412" )
		echo "Error debe introducir un Número de teléfono con un codigo de área aprobado por conatel en el campo teléfono de contacto";
		elseif ($qEPhone!=11) { //2.Comprobación de cantidad de carateres del nombre
		echo "El número de teléfono en el campo teléfono de emergencia debe ser tener 11 caracteres, Ejemplo 04241874822";
	}
		elseif ($iniEPhoneLoc!="02" xor $iniEPhone!="0424" xor $iniEPhone!="0426" xor $iniEPhone!="0422" xor $iniEPhone!="0414" 		xor $iniEPhone!="0416" xor $iniEPhone!="0412" )
		echo "Error debe introducir un Número de teléfono con un codigo de área aprobado por conatel en el campo teléfono de emergencia";
		elseif($edadYears<18) { // comprueba la mayoria de edad 
			include_once("formulario_menor_edad.php");
		}
		elseif ($placedominio==0){
    	echo "ERROR:Todos los correos deben contener en caracter <b>'@'</b> antes del dominio. <BR>";}
    	elseif ($qlogin==0) 
    	echo 'ERROR: el correo debe tener un nombre de usuario antes del arroba "@"<BR>';
    	elseif ($qdominio<=1) 
    	echo 'ERROR: El dominio del correo debe tener información después del arroba "@".<BR>';
    	elseif ($puntocom==0) {
    	echo 'ERROR: Debe tener el caracter <b>"."</b> antes del "com".<BR>';}
		elseif ($qUserName<3 or $qPassword<3)
		echo 'ERROR: El nombre de usuario y el password deben terner tres caracteres';
		elseif ($password!=$password2)
		echo 'ERROR: Verifique el password, deben coincidir el primero y el segundo';


    else {
        include_once ("writedatabase.php");
    }
		
?>

</body>
</html>