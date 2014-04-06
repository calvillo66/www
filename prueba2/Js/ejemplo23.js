// JavaScript Document

// BOTONES ;)

$boton2 = $('#2');
$boton2.click(funVnation);


// FUNCIONES :)
function funVnation(e) 
		{
		e.preventDefault();// previene las acciones por defecto del navegador
		instrucciones='Por favor selecciona de donde eres';// sustituye en 'ventana general' con lo que corresponda
		imagen=3;// sustituye en 'imagen1' con lo que corresponda a la imagen es importante que las imagenes tenga el numero que corresponda en la carpeta pics
		destino='cedula';// sustituye el id del boton que corresponda
		destino2='tipoDeDocumento';// sustituye el id del boton que corresponda
		imagen1='<img src="pics/imagen'+imagen+'.png"';// sustituye en 'ventana general' con lo que corresponda
		bottons= '<input type="button" name="" value="Nacional" class="classBoton " id='+destino+'>';// sustituye en 'ventana general' en el boton se deben crear tantos como botones se quieran
		bottons2= '<input type="button" name="" value="Extranjero" class="classBoton " id='+destino2+'>';// sustituye en 'ventana general' en el boton se deben crear tantos como botones se quieran
		campos='<input type="number" name="cedula" maxlength="40" id="cedula" placeholder="Cedula" class="campoTexto"></input>';
		titulo= 'Donde fueres haz lo que vieres ¿Cuál es tu nacionalidad?'
		ventanaGeneral= '<div class="ventanasGen" id="1"> <div class="inDiv"> <div class="tituloVentana" id="tituloBienvenido"> <span>'+titulo+'</span> </div><!--<div class="tituloVentana" id="tituloBienvenido"> --> <figure class="imagenHeader" id="imagenDjC"> <!--aqui va la imagen--> '+imagen1+' alt="" class="imagenHeaderIn"/> </figure> <div class="instruciones"> <span>'+instrucciones+ '</span> <form>'+bottons+bottons2+'</form> </div> </div> <!--<div class="inDiv"> --> </div> ';
		

		var nation=$("#nombre").val();
		var apellido= $("#apellido").val();
		$(".ventanasGen").html(ventanaGeneral);
		$boton1= $('#cedula')
		$boton2 = $('#tipoDeDocumento');
		$boton1.click(function()
			{
			var nation='V';
			funVcedula(); 
			})
		$boton2.click(function()
			{
			var nation='E';
			funVtipoDeDocumento(); 
			})

		}
		//$boton2.click(funVtipoDeDocumento);
	


	function funVcedula() 
		{
		inst='Por favor introduce tu cedula';
		imagen1='<img src="pics/imagen2.png"';
		destino='2'
		bottons= '<input type="button" name="" value="GungHo" class="classBoton " id='+destino+'>';
		campos='<input type="number" name="cedula" maxlength="40" id="cedula" placeholder="Cedula" class="campoTexto"></input>';
		ventanaGeneral= '<div class="ventanasGen" id="1"> <div class="inDiv"> <div class="tituloVentana" id="tituloBienvenido"> <span>Bienvenido</span> </div><!--<div class="tituloVentana" id="tituloBienvenido"> --> <figure class="imagenHeader" id="imagenDjC"> <!--aqui va la imagen--> '+imagen1+' alt="" class="imagenHeaderIn"/> </figure> <div class="instruciones"> <span>'+inst+'</span> <form>'+campos+bottons+'</form> </div> </div> <!--<div class="inDiv"> --> </div> ';
		var nombre=$("#nombre").val();
		var apellido= $("#apellido").val();
		$(".ventanasGen").html(ventanaGeneral);
		$boton2 = $('#3');
		$boton2.click(funVci);
		}

	function funVtipoDeDocumento()
		{
	
		inst= 'selecciona el documento que tienes, recuerda que debes tenerlo contigo en este momento';// sustituye en 'ventana general' con lo que corresponda
		imagen=3;// sustituye en 'imagen1' con lo que corresponda a la imagen es importante que las imagenes tenga el numero que corresponda en la carpeta pics
		destino='cedula';// sustituye el id del boton que corresponda
		destino2='pasaporte';// sustituye el id del boton que corresponda
		destino3='indocumentado';// sustituye el id del boton que corresponda
		imagen1='<img src="pics/imagen'+imagen+'.png"';// sustituye en 'ventana general' con lo que corresponda
		bottons= '<input type="button" name="" value="Cedula de Extranjero" class="classBoton " id='+destino+'>';// sustituye en 'ventana general' en el boton se deben crear tantos como botones se quieran
		bottons2= '<input type="button" name="" value="Pasaporte" class="classBoton " id='+destino2+'>';// sustituye en 'ventana general' en el boton se deben crear tantos como botones se quieran
		bottons3= '<input type="button" name="" value="No tengo ninguno" class="classBoton " id='+destino3+'>';// sustituye en 'ventana general' en el boton se deben crear tantos como botones se quieran
		campos='<input type="number" name="cedula" maxlength="40" id="cedula" placeholder="Cedula" class="campoTexto"></input>';
		titulo= 'eres u negro ';
		ventanaGeneral= '<div class="ventanasGen" id="1"> <div class="inDiv"> <div class="tituloVentana" id="tituloBienvenido"> <span>'+titulo+'</span> </div><!--<div class="tituloVentana" id="tituloBienvenido"> --> <figure class="imagenHeader" id="imagenDjC"> <!--aqui va la imagen--> '+imagen1+' alt="" class="imagenHeaderIn"/> </figure> <div class="instruciones"> <span>'+inst+'</span> <form>'+bottons+bottons2+bottons3+'</form> </div> </div> <!--<div class="inDiv"> --> </div> ';
		$(".ventanasGen").html(ventanaGeneral);
		$boton1= $('#cedula')
		$boton2 = $('#pasaporte');
		$boton3= $('#indocumentado');
		
		$boton1.click(function()
			{
			var tipoDeDocumento='C';
			funVcedula(); 
			})
		$boton2.click(function()
			{
			var tipoDeDocumento='P';
			funVloSentimos(); 
			})
		$boton3.click(function()
			{
			var tipoDeDocumento='I';
			funVloSentimos(); 
			})

		}
	function funVloSentimos(){
		inst='Lo sentimos debes tener una cedula para trabajar en Venesupal, te invitamos a ir al SAIME';// sustituye en 'ventana general' con lo que corresponda
		imagen=3;// sustituye en 'imagen1' con lo que corresponda a la imagen es importante que las imagenes tenga el numero que corresponda en la carpeta pics
		destino='SAIME';// sustituye el id del boton que corresponda
		imagen1='<img src="pics/imagen'+imagen+'.png"';// sustituye en 'ventana general' con lo que corresponda
		bottons= '<input type="button" name="" value="Ir al SAIME" class="classBoton " id='+destino+'>';// sustituye en 'ventana general' en el boton se deben crear tantos como botones se quieran
		//bottons2= '<input type="button" name="" value="Pasaporte" class="classBoton " id='+destino2+'>';// sustituye en 'ventana general' en el boton se deben crear tantos como botones se quieran
		//bottons3= '<input type="button" name="" value="No tengo ninguno" class="classBoton " id='+destino3+'>';// sustituye en 'ventana general' en el boton se deben crear tantos como botones se quieran
		campos='<input type="number" name="cedula" maxlength="40" id="cedula" placeholder="Cedula" class="campoTexto"></input>';
		titulo= 'Aún no puedes trabajar en Venesupal ';
		ventanaGeneral= '<div class="ventanasGen" id="1"> <div class="inDiv"> <div class="tituloVentana" id="tituloBienvenido"> <span>'+titulo+'</span> </div><!--<div class="tituloVentana" id="tituloBienvenido"> --> <figure class="imagenHeader" id="imagenDjC"> <!--aqui va la imagen--> '+imagen1+' alt="" class="imagenHeaderIn"/> </figure> <div class="instruciones"> <span>'+inst+'</span> <form>'+bottons+'</form> </div> </div> <!--<div class="inDiv"> --> </div> ';
		$(".ventanasGen").html(ventanaGeneral);
		$boton1= $('#SAIME')
		}
	


/* var ventana = 'extrangero';
switch (jsLang) { 
    case 'jquery': 
        alert('jQuery Wins!');
        break;
    case 'prototype': 
        alert('prototype Wins!');
        break;
    case 'mootools': 
        alert('mootools Wins!');
        break;      
    case 'dojo': 
        alert('dojo Wins!');
        break;
    default:
        alert('Nobody Wins!');
} */






/*;
	}
	
	//alert(i);
	//$(selector).hide(duration,callback)

//}
	function mostrar (){
		$('#2').css('visibility', 'visible');
	}
function ocultar2(e){
	var ventana=.ventana;
		e.preventDefault();
		$(ventana).hide(2000,mostrar);

	function mostrar (){
		$('#3').css('visibility', 'visible');
	}

//mostrar()
*/
