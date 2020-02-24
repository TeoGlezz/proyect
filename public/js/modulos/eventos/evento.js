let ajax = new XMLHttpRequest();

function store() {

	var data = new FormData();
	var datos = document.getElementsByClassName('dato');

    token = $('meta[name=csrf-token]').attr('content');

    data.append( 'evento', document.getElementById('eve').value );

    /*for (var i = 0; i < datos.length; i++) {
    	data.append( datos[i].name, datos[i].value );
    }*/

	ajax.onreadystatechange = function() {
		if(this.readyState == 4){
			if(this.status >= 200 && this.status < 300) {
				Swal.fire(
				  'Good job!',
				  '¡Ey, tu petición es correcta!',
				  'success'
				)
			}
		}
	}
	ajax.open('POST','/eventos/store');
	ajax.setRequestHeader('X-CSRF-Token', token);
	ajax.send(data);

}

function update(id_evento) {
	ajax.onreadystatechange = function() {
		if(this.readyState == 4){
			if(this.status >= 200 && this.status < 300) {
				Swal.fire(
				  'Good job!',
				  '¡Ey, tu petición es correcta!',
				  'success'
				)
			}
		}
	}
	ajax.open('GET','/eventos/update?id_evento='+id_evento);	
	ajax.send();
}

function deleteX(id_evento) {
	ajax.onreadystatechange = function() {
		if(this.readyState == 4){
			if(this.status >= 200 && this.status < 300) {
				Swal.fire(
				  'Good job!',
				  '¡Ey, tu petición es correcta!',
				  'success'
				)
			}
		}
	}
	ajax.open('GET','/eventos/delete?id_evento='+id_evento);
	ajax.send();	
}