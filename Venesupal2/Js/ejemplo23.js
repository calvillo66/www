$boton = $('.classBoton');
$boton.click(ocultar);
var i=1;

	function ocultar(e){
	var ventana="#1";
		e.preventDefault();
		$(ventana).hide(2000,mostrar);
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