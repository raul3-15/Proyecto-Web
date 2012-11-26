
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
	
	var params = getGET();
	if(params.index != "") {
		document.getElementById("listaApps").selectedIndex = parseInt(params.index);
	}
	
});

function cargarApp() {
	var idSeleccionado = document.getElementById("listaApps").value;
	var index = document.getElementById("listaApps").selectedIndex;
	location.href="apps.php?app=" + idSeleccionado + "&index=" + index;
}

function getGET(){
	var loc = document.location.href;
	var getString = loc.split('?')[1];
	var GET = getString.split('&');
	var get = {};//this object will be filled with the key-value pairs and returned.
	
	for(var i = 0, l = GET.length; i < l; i++){
	  var tmp = GET[i].split('=');
	  get[tmp[0]] = unescape(decodeURI(tmp[1]));
	}
	return get;
}
