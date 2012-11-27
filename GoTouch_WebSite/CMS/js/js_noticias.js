function validarForm(form){
	var titulo = form.input_titulo.value;
	
	if(titulo != null && titulo !="" && titulo.length > 0){
		var contenido = form.input_contenido.value;
		if(contenido != null && contenido !="" && contenido.length > 0){
			var file = form.input_file.value;
			if(file != null && file !="" && file.length > 0){
				return true;
			}else{
				alert("Debe seleccionar una imagen");
			}
		}else{
			alert("Debe ingresar una descripcion");	
		}
	}else{
		alert("Debe ingresar un titulo");	
	}
	return false;
}