
$(document).ready(function(){
	
	/* Inicialización del scrollbar */
	$('#div_textoApp').tinyscrollbar();
	
	/* Inicialización del slider de la app 
	/* Parametros en: http://basic-slider.com/ */
	$('#div_sliderApp').bjqs({
		height      : 300,
		width       : 500,
		responsive  : true,
		animtype      : 'slide',
		hoverpause : true,
		nexttext : '',
		prevtext : ''
	});
	
});
