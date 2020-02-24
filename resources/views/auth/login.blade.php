@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid bg-white">
  <div class="container">
    <div class="row">
        <div class="col">            
            <div class="card card-sombra">
                <div class="card-header bg-warning text-center"><img src="{{ asset('img/ecoplace.png') }}" width="200"></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico:</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña:</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Iniciar') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
                </div>
            </div>
        </div> 
        <div class="col">
            <div class="jumbotron jumbotron-fluid bg-white">
              <div class="container">
                <h1 class="display-4">Cuidemos nuestro planeta</h1>
                <p class="lead">Es de todos y para todos</p>
              </div>
            </div>
        </div>       
    </div>    
  </div>
</div>

@endsection
