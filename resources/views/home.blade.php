@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @foreach($eventos as $even)
                        <div class="card">
                            <div class="card-header">{{ $even->nombre_evento }}</div>
                            <div class="card-body">
                                <h3>{{ $even->nombre_res }}</h3>
                                <h3>{{ $even->descripcion_evento }}</h3>
                            </div>
                            <div class="card-footer"></div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
