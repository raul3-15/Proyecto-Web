$(window).load(function(){
	
	//Se cargan las imagenes del slide cuando carga la pagina

	// Se prueba si el explorador soporta el componente canvas
	var soportaCanvas = 'getContext' in document.createElement('canvas');

	// Se usa un timeout para hacer una carga asincrona de las imagenes
	// para no gastar procesamiento del CPU y asegurar que se muestre 
	// correctamente
	var slides 		 = $('#slideshow li'),
		indiceActual = 0,
		slideshow 	 = {width:0,height:0};

	setTimeout(function(){
		
		window.console && window.console.time && console.time('Generated In');
		
		if(soportaCanvas){
			$('#slideshow img').each(function(){

				if(!slideshow.width){
					// Se toman las dimensiones de la imagen
					slideshow.width = this.width;
					slideshow.height = this.height;
				}
				
				colocarImagenCanvas(this);
			});
		}
		
		window.console && window.console.timeEnd && console.timeEnd('Generated In');
		
		$('#slideshow .flecha').click(function(){
			var li				= slides.eq(indiceActual),
				canvas			= li.find('canvas'),
				indiceSiguiente	= 0;

			// Se calcula el indice del siguiente slide
			if($(this).hasClass('next')){
				indiceSiguiente = indiceActual >= slides.length-1 ? 0 : indiceActual+1;
			}
			else {
				indiceSiguiente = indiceActual <= 0 ? slides.length-1 : indiceActual-1;
			}

			var siguiente = slides.eq(indiceSiguiente);
			
			// Si se soporta el canvas se genera la animacion
			if(soportaCanvas){
				canvas.fadeIn(function(){
					
					// Llama a la funcion para mostrar el siguiente slide
					siguiente.show();
					indiceActual = indiceSiguiente;
					
					// Produce la animacion de transicion entre slides
					li.fadeOut(function(){
						li.removeClass('slideActive');
						canvas.hide();
						siguiente.addClass('slideActive');
					});
				});
			}
			else {
				
				// En caso de no soportar el canvas, se utiliza
				// la version plana del slide
				
				indiceActual=siguienteIndice;
				siguiente.addClass('slideActive').show();
				li.removeClass('slideActive').hide();
			}
		});
		
	},100);

	
	// Coloca el canvas con la imagen
	function colocarImagenCanvas(imagen){

		var canvas			= document.createElement('canvas'),
			canvasContext	= canvas.getContext("2d");
		
		// Establece el tamaño del canvas con el tamaño de la imagen
		canvas.width = slideshow.width;
		canvas.height = slideshow.height;
		
		// Dibuja la imagen en el canvas y coloca el canvas
		canvasContext.drawImage(imagen,0,0);
		imagen.parentNode.insertBefore(canvas,imagen);
	}
	
});
