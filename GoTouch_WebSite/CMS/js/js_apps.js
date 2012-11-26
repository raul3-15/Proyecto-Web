
$(document).ready(function(){
	
	/* Inicialización del scrollbar */
	$('#div_listaApps').tinyscrollbar();
	
});

function validarFormArgregarApp() {
	
	var listbox = document.getElementById("listaApps");
	
	if(listbox.options[listbox.selectedIndex].value == "nueva") {

		var nombre = document.getElementById("nombreApp").value;
		nombreProyecto = $.trim(nombre);
		
		var descripcion = document.getElementById("descripcionApp").value;
		descripcion = $.trim(descripcion);
		
		var icono = document.getElementById("iconoApp").value;
		
		if (nombre == "") {
			alert("Debe ingresar un nombre para la aplicación");
			return false;
		}
		else if (descripcion == "") {
			alert("Debe ingresar una descripción para la aplicación");
			return false;
		}
		else {
			alert("La nueva aplicación ha sido agregada");
			return true;
		}
	}
	return true;
}
