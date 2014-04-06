// JavaScript Document
$(document).ready(cargar); 
function cargar () {
	//document.getElementById('1').value='flkflkf';
navegar=$('#1');
cambiarBorde(navegar);

}

function cambiarBorde (objeto){
	objeto.css('border','5px solid red');


}