// Variables Globales
var _SlidesActuales = new Array(4),
	_IndiceActual = -1,
	_Slides 		 = $('#div_slider_noticias li'),
	_SlidesMaximos = _Slides.length >= 4 ? 4 : _Slides.length;
	 
$(window).load(function(){	
	//Se cargan los elementos del slide cuando carga la pagina
	_Slides = $('#div_slider_noticias li');
	$('#div_slider_noticias .flecha').click(function(){
		realizarTransicion(_Slides, $(this).hasClass('siguiente'));	
	});
	realizarTransicion(_Slides, true);
},100);

function realizarTransicion(pSlides, pDireccion){	
	// Se calculan los indices de los siguientes slides
	var indicesSiguientes = [0,0,0,0];
	var siguiente;
	for(var i = 0; i< _SlidesMaximos ; i++){
		if(pDireccion){
			indicesSiguientes[i] = _IndiceActual >= pSlides.length-1 ? 0 : _IndiceActual+1;	
			_IndiceActual = indicesSiguientes[i];
			siguiente = pSlides.eq(indicesSiguientes[i]);
		}else {
			indicesSiguientes[i] = _IndiceActual <= 0 ? pSlides.length-1 : _IndiceActual-1;
			_IndiceActual = indicesSiguientes[i];	
			siguiente = pSlides.eq(indicesSiguientes[i]);
		}
		pSlides.eq(indicesSiguientes[i]).show();	
		
		if(_SlidesActuales[i] != null){
			pSlides.eq(_SlidesActuales[i]).removeClass("slideActive" + i);
		}
	}		

	_IndiceActual = indicesSiguientes[0];
	_SlidesActuales = indicesSiguientes;
	
	for(var i = 0; i < _SlidesMaximos ; i++){
		siguiente = pSlides.eq(indicesSiguientes[i]);
		siguiente.addClass("slideActive" + i);
	}
}