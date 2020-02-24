@extends('layouts.app')
@section('content')

	<script src="{{ asset('js/modulos/eventos/evento.js') }}"></script>

	<div class="container mt-4">
		<div class="row">
			<h3 class="h3">Campañas Activas</h3>
			<!--<div class="col"><input type="text" name="fecha" class="form-control dato"></div>
			<div class="col"><input type="text" name="encargado" class="form-control dato"></div>
			<div class="col"><input type="text" name="participantes" class="form-control dato"></div>
			<div class="col"><input type="text" name="recompensa" class="form-control dato"></div>-->
		</div>
		<hr>
		<table id="tabla_evento" class="display">
		    <thead>
		        <tr>
					<th>ID Evento</th>
					<th>Responsable</th>
		            <th>Evento</th>
		            <th>Fecha de creación</th>		            
		        </tr>
		    </thead>
		    <tfoot>
				<tr>
					<td>C1</td>
					<td>C2</td>
					<td>C3</td>	
					<td>C4</td>				
				</tr>		        
			</tfoot>
		</table>	
	</div>
	
	<script>		
		$(document).ready( () => {						
			jQuery.fn.dataTable.Api.register( 'processing()', function ( show ) {
				return this.iterator( 'table', function ( ctx ) {
					ctx.oApi._fnProcessingDisplay( ctx, show );
				});
			});
			var ajax = new XMLHttpRequest();
			ajax.onreadystatechange = function() {
				if(this.readyState == 4) {
					if(this.status >= 200 && this.status < 300) {
						var json = JSON.parse(this.responseText);	
						
						var tabla = $('#tabla_evento').DataTable({	
							"processing": true,				
							"data": json,
							"columns": [
								{ "data": "id_evento" },
								{"data": "nombre_res"},
								{ "data": "nombre_evento" },
								{ "data": "created_at" }
							]
						});
						
						tabla.processing( true );
						setTimeout( function() {
							tabla.processing( false )
						}, 2000);
					}
				}
			}
			ajax.open('GET','/eventos/getData');
			ajax.send();
		});
	</script>
@endsection