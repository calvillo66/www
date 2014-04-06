idVentana=1
boton = $('.classBoton');
boton.click(ocultarMostrarVentana);

function ocultarMostrarVentana () {
idVentana=++idVentana;
texto= idVentana ;
ventanita= '<div id='+'"'+idVentana+'"'+'class="ventana">'+'<div id="divGenIn">'+'<div class="backFigure">'+'<figure>'+'<img src="pics/cedula.png"  id="cedu" alt="">'+'</figure>'+'</div>'+'<div class="text">'+texto+'</div>'+'<form class="classFormu">'+'<input type="number" name="ci" value="" class="classBoton2" placeholder="Coloca aquí tu número">'+'<p>'+'<input name="opt1" type="button" value="GungHo!!!" class="classBoton">'+'</p>';

$(".ventana").html(ventanita);

boton = $('.classBoton');
boton.click(ocultarMostrarVentana);
}


  			
  			  
  			
            
            
            
              
                   	