// Variables Globales
var indiceActual = -1,
	indiceAnterior = 0,
	slides 		 = $('#slideshow li');
	
$(window).load(function(){	
	//Se cargan los elementos del slide cuando carga la pagina
	slides = $('#slideshow li');
	$('#slideshow .flecha').click(function(){
		realizarTransicion(slides, $(this).hasClass('siguiente'));	
	});
	realizarTransicion(slides, true);
},100);

function realizarTransicion(pSlides, pDireccion){
	var li	= pSlides.eq(indiceActual),
		li2 = pSlides.eq(indiceAnterior),
		indiceSiguiente	= 0;
		indiceSiguiente2 = 0;

	// Se calcula el indice del siguiente slide
	if(pDireccion){
		indiceSiguiente = indiceActual >= pSlides.length-1 ? 0 : indiceActual+1;
		indiceSiguiente2 = indiceSiguiente >= pSlides.length-1 ? 0 : indiceSiguiente+1;
	}
	else {
		indiceSiguiente = indiceActual <= 0 ? pSlides.length-1 : indiceActual-1;
		indiceSiguiente2 = indiceSiguiente <= 0 ? pSlides.length-1 : indiceSiguiente-1;
	}

	var siguiente = pSlides.eq(indiceSiguiente);
	var siguiente2 = pSlides.eq(indiceSiguiente2);
	
	// Llama a la funcion para mostrar el siguiente slide
	siguiente.show();
	siguiente2.show();
	
	indiceAnterior = indiceSiguiente2;
	indiceActual = indiceSiguiente;
	
	// Produce la animacion de transicion entre slides
	li.fadeOut(function(){
		li.removeClass('slideActive');		
		li2.removeClass('slideActive2');				
		siguiente.addClass('slideActive');
		siguiente2.addClass('slideActive2');
	});
}