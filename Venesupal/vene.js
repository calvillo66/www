// JavaScript Document
$(document).ready(cargar); 
function cargar () {
	//document.getElementById('1').value='flkflkf';
navegar=$('div.campo');
alert(navegar.html());
cambiarBorde(navegar);

}

function cambiarBorde (objeto){
	alert(objeto.html());
	objeto.css('background-color','red');
}