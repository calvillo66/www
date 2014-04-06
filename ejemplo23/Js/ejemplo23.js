// JavaScript Document
$(document).ready(function() {
// variables
	$boton = $('#agregar');
	
//funciones

// Eventos
$("#t").on("click","img[name=eliminar]",eliminar);
$boton.click(nuevo);
});// CIERRA LA function PARA QUE LA PAGINA BAJE
$i=0;
function nuevo(e){
	
	e.preventDefault();
	$nombre = $('#nombre').val();
	$nuevaF= ('<tr id='+$i+'> <td>'+$nombre+'</td> <td><img id="img_'+$i+'" name="eliminar" src="pics/eliminar.png" width="28" height="28"  alt=""/></td> </tr> ');
	$tabla= $('#t');  	
	$tabla.append($nuevaF);
	//$("img[name=eliminar]").click(eliminar);
	$i++;
}

function eliminar(){
	var $id=$(this).attr("id");
	$id.substring(4);
}