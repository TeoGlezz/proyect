<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventoController extends Controller
{
	public function getData(){
    	return Evento::where('status', 1)->get();		
	}
    public function index() {
		//$evento = Evento::where('status', 1)->get();  
		$eventos = Evento::all();
		return view('modulos.eventos.index', compact('eventos'));
		
    }

    public function store(Request $request) {  
    	/*for ($i=0; $i < 100; $i++) { 
    		Evento::insert([ 'evento' => $request->evento.$i ]);
		} */
		
		$evento = new Evento();
		$evento->nombre_res = $request->input('nombre_res');
		$evento->nombre_evento = $request->input('nombre_evento');
		$evento->tipo_evento = $request->input('tipo_evento');
		$evento->descripcion_evento = $request->input('descripcion_evento');
		$evento->status = $request->input('status');
		$evento->save();
		return'saved';


		
		
    }

    /*public function update(Request $request){    	
    	Evento::where('id_evento', $request->id_evento)
    		->update(['evento' => $evento]);   
    }*/

    public function delete(Request $request){    	
	    Evento::where('id_evento', $request->id_evento)
    		->update(['status' => 0]);
    }

}
