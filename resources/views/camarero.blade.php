@extends('layouts.app')

@section('cabecera')
    <h1>Camarero</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6>{{ __('Crear Comanda') }}</h6>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <h6 class="alert alert-success">{{ session('success') }}</h6>
                        @endif

                        <form method="POST" action="{{ route('comanda') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="mesa" class="col-md-4 col-form-label text-md-start">{{ __('Nº Mesa') }}</label>

                                <div class="col-md-6">
                                    <input id="mesa" min="1" max="6" type="number"
                                        class="form-control @error('mesa') is-invalid @enderror" name="mesa"
                                        value="{{ old('mesa') }}" required autocomplete="mesa" autofocus>

                                    @error('mesa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="entrantes"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Entrantes ') }}</label>

                                <div class="col-md-6">

                                    <select id="entrantes" name="productos[]"
                                        class="form-control @error('entrantes') is-invalid @enderror"
                                        value="{{ old('entrantes') }}" required autocomplete="entrantes">
                                        <option selected disabled>Elige un entrante</option>
                                        @foreach ($entrantes as $entrante)
                                            <option value="{{ $entrante->id }}">{{ $entrante->nombre }}</option>
                                        @endforeach
                                    </select>

                                    @error('entrantes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="primeros"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Primeros ') }}</label>

                                <div class="col-md-6">

                                    <select id="primeros" name="productos[]"
                                        class="form-control @error('primeros') is-invalid @enderror"
                                        value="{{ old('primeros') }}" required autocomplete="primeros">
                                        <option selected disabled>Elige un primero</option>
                                        @foreach ($primeros as $primero)
                                            <option value="{{ $primero->id }}">{{ $primero->nombre }}</option>
                                        @endforeach
                                    </select>

                                    @error('primeros')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="segundos"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Segundos ') }}</label>

                                <div class="col-md-6">

                                    <select id="segundos" name="productos[]"
                                        class="form-control @error('segundos') is-invalid @enderror"
                                        value="{{ old('segundos') }}" required autocomplete="segundos">
                                        <option selected disabled>Elige un segundo</option>
                                        @foreach ($segundos as $segundo)
                                            <option value="{{ $segundo->id }}">{{ $segundo->nombre }}</option>
                                        @endforeach
                                    </select>

                                    @error('segundos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bebidas"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Bebidas ') }}</label>

                                <div class="col-md-6">

                                    <select id="bebidas" name="productos[]"
                                        class="form-control @error('bebidas') is-invalid @enderror"
                                        value="{{ old('bebidas') }}" required autocomplete="bebidas">
                                        <option selected disabled>Elige una bebida</option>
                                        @foreach ($bebidas as $bebida)
                                            <option value="{{ $bebida->id }}">{{ $bebida->nombre }}</option>
                                        @endforeach
                                    </select>

                                    @error('bebidas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="comentarios"
                                    class="col-md-4 col-form-label text-md-start">{{ __('Comentarios') }}</label>

                                <div class="col-md-6">
                                    <textarea id="comentarios" min="1" max="6" type="number" class="form-control @error('comentarios') is-invalid @enderror"
                                        name="comentarios" value="{{ old('comentarios') }}"
                                        autocomplete="comentarios" autofocus></textarea>

                                    @error('comentarios')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Crear Comanda') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($comandas as $comanda)
        {{-- @if ($comanda->id == null)
        @break
    @endif --}}
        ID: {{ $comanda->id }} - Mesa: {{ $comanda->mesa }} - Estado: {{ $comanda->estado }} -
        Comentarios: {{ $comanda->comentarios }} - Camarero: {{ $camarero }}<br>
    @endforeach
@endsection
