// agregar alumno javascript function
function add_member() {
	// iniciamos el proceso
	var url = 'agregar_alumno.php';
	var method = 'POST';
	var params = 'nombres='+document.getElementById('nombres').value;
	params += '&apellidos='+document.getElementById('apellidos').value;
	params += '&email='+document.getElementById('email').value;
	params += '&telefono='+document.getElementById('telefono').value;
	var container_id = 'list_container' ;
	var loading_text = '<img src="images/fb_loading.gif">' ;
	// llamamos ajax function
	ajax (url, method, params, container_id, loading_text) ;
}

// delete_member function
function delete_member(id) {
	if (confirm('Confirma eliminar registro de alumno ?')) {
		// initialisation
		var url = 'borrar_alumno.php';
		var method = 'POST';
		var params = 'id='+id;
		var container_id = 'list_container' ;
		var loading_text = '<img src="images/fb_loading.gif">' ;
		// call ajax function
		ajax (url, method, params, container_id, loading_text) ;
	}
}

// ajax : basic function for using ajax easily
function ajax (url, method, params, container_id, loading_text) {
    try { // For: chrome, firefox, safari, opera, yandex, ...
    	xhr = new XMLHttpRequest();
    } catch(e) {
	    try{ // for: IE6+
	    	xhr = new ActiveXObject("Microsoft.XMLHTTP");
	    } catch(e1) { // if not supported or disabled
		    alert("Not supported!");
		}
	}
	xhr.onreadystatechange = function() {
						       if(xhr.readyState == 4) { // when result is ready
							       document.getElementById(container_id).innerHTML = xhr.responseText;
							   } else { // waiting for result 
							       document.getElementById(container_id).innerHTML = loading_text;
							   }
						   	}
	xhr.open(method, url, true);
	xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr.send(params);
}

function update_member(alumno_id) {
    var alumno_id = document.getElementById('alumno_id').value;
    var nombres = document.getElementById('nombres').value;
    var apellidos = document.getElementById('apellidos').value;
    var email = document.getElementById('email').value;
    var telefono = document.getElementById('telefono').value;
    
    // Verificar si se proporcionó un ID de alumno válido
    if (alumno_id === '') {
        alert('Por favor, ingrese un ID de alumno válido para actualizar.');
        return;
    }

    // Realizar la solicitud AJAX para actualizar los datos
    var url = 'actualizar_alumno.php';
    var method = 'POST';
    var params = 'alumno_id=' + alumno_id + '&nombres=' + nombres + '&apellidos=' + apellidos + '&email=' + email + '&telefono=' + telefono;
    var container_id = 'list_container';
    var loading_text = '<img src="images/fb_loading.gif">';

    // Llamar a la función AJAX para actualizar los datos
    ajax(url, method, params, container_id, loading_text);
    
    // Limpiar los campos del formulario después de la actualización
    document.getElementById('alumno_id').value = '';
    document.getElementById('nombres').value = '';
    document.getElementById('apellidos').value = '';
    document.getElementById('email').value = '';
    document.getElementById('telefono').value = '';
}