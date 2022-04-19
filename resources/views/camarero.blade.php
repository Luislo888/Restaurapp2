@extends('layouts.app')

@section('cabecera')
    <h6 class="tituloRol">Camarero</h6>
    {{-- <h1> --}}
    <div class="collapse navbar-collapse text-center justify-content-center comandasNavTabs" id="navbarSupportedContent">
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            {{-- Comadas: --}}
            <button id="botonCrear" type="button" class="btn alert alert-primary">Crear</button>
            <button id="botonAbiertas" type="button" class="btn alert alert-warning">Abiertas</button>
            <button type="button" class="btn alert alert-danger">En curso</button>
            <button type="button" class="btn alert alert-success">Cerradas</button>

        </div>
    </div>
    {{-- </h1> --}}
@endsection

@section('content')
    <div class="container marginTopBody">
        <div class="row justify-content-center miDiv">
            <div id="anchorCrearComanda"></div>
            <div class="col-md-auto">
                <div class="card">
                    <div class="card-header">
                        <h6 class="" id="tituloCrearComanda">{{ __('Crear Comanda') }}</h6>
                    </div>

                    <div class="card-body" id="bodyCrearComanda">
                        @if (session('success'))
                            <h6 class="alert alert-success notificacionSucces">{{ session('success') }}</h6>
                        @endif

                        <form method="POST" action="{{ route('comanda') }}">
                            @csrf

                            <div class="row mb-4">
                                <label for="mesa"
                                    class="col-md-5 col-form-label text-md-start">{{ __('Nº Mesa') }}</label>

                                <div class="col-md-7">
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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Entrantes ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Primeros ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Segundos ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Bebidas ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Comentarios') }}</label>

                                <div class="col-md-7">
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


                            <div class="row mb-0 justify-content-center">
                                <div class="col-md-12 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Crear Comanda') }}
                                    </button>

                                    <button type="reset" class="btn btn-danger">
                                        {{ __('Limpiar') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            {{-- <div id="anchorComandasAbiertas"></div> --}}
            <div class="col-md-auto" id="anchorComandasAbiertas">
                <div class="card">
                    <div class="card-header text-warning titulosComandas">
                        <h6 id="tituloComandaAbierta">Comandas Abiertas</h6>
                    </div>
                </div>
                @foreach ($comandas as $comanda)
                    @if ($comanda->id != null)
                        <div class="card mb-3">
                            <div class="card-header">
                                {{ $comanda->created_at }}
                                <br>
                                <strong>Mesa:</strong> {{ $comanda->mesa }}
                                <span class="textoDerecha"><strong>Nº Comanda:</strong>
                                    {{ $comanda->id }}</span>
                                {{-- <br> --}}
                                {{-- <br> --}}
                                {{-- - Estado:{{ $comanda->estado }} --}}
                                {{-- - Camarero: {{ $camarero }}- --}}
                            </div>

                            <div class="card-body bodyComandasAbiertas">
                                <strong>Entrantes:</strong>
                                @foreach ($productos as $producto)
                                    @if ($producto->comanda_id == $comanda->id && $producto->categoria == 'entrantes')
                                        <div><br>{{ $producto->nombre }}</div>
                                    @endif
                                @endforeach
                                <br>
                                <strong>Primeros:</strong>
                                @foreach ($productos as $producto)
                                    @if ($producto->comanda_id == $comanda->id && $producto->categoria == 'primeros')
                                        <div><br>{{ $producto->nombre }}</div>
                                    @endif
                                @endforeach
                                <br>
                                <strong>Segundos:</strong>
                                @foreach ($productos as $producto)
                                    @if ($producto->comanda_id == $comanda->id && $producto->categoria == 'segundos')
                                        <div><br>{{ $producto->nombre }}</div>
                                    @endif
                                @endforeach
                                <br>
                                <strong>Bebidas:</strong>
                                @foreach ($productos as $producto)
                                    @if ($producto->comanda_id == $comanda->id && $producto->categoria == 'bebidas')
                                        <div><br>{{ $producto->nombre }}</div>
                                    @endif
                                @endforeach
                                <br>
                                <strong>Comentarios:</strong> {{ $comanda->comentarios }}
                                <br>

                                <div class="row mb-1 mt-1 botonesComandas">
                                    <div class="col-md-12 offset-md-3 mb-1 mt-1 justify-content-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Editar ') }}
                                        </button>

                                        <button type="submit" class="btn btn-danger">
                                            {{ __('Cancelar ') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>


            <div class="col-md-auto">
                <div class="card">
                    <div class="card-header">
                        <h6>{{ __('Crear Comanda') }}</h6>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('comanda') }}">
                            @csrf

                            <div class="row mb-4">
                                <label for="mesa"
                                    class="col-md-5 col-form-label text-md-start">{{ __('Nº Mesa') }}</label>

                                <div class="col-md-7">
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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Entrantes ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Primeros ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Segundos ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Bebidas ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Comentarios') }}</label>

                                <div class="col-md-7">
                                    <textarea id="comentarios" min="1" max="6" type="number"
                                        class="form-control @error('comentarios') is-invalid @enderror"
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
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Crear Comanda') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>



            <div class="col-md-auto">
                <div class="card">
                    <div class="card-header">
                        <h6>{{ __('Crear Comanda') }}</h6>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('comanda') }}">
                            @csrf

                            <div class="row mb-4">
                                <label for="mesa"
                                    class="col-md-5 col-form-label text-md-start">{{ __('Nº Mesa') }}</label>

                                <div class="col-md-7">
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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Entrantes ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Primeros ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Segundos ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Bebidas ') }}</label>

                                <div class="col-md-7">

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
                                    class="col-md-5 col-form-label text-md-start">{{ __('Comentarios') }}</label>

                                <div class="col-md-7">
                                    <textarea id="comentarios" min="1" max="6" type="number"
                                        class="form-control @error('comentarios') is-invalid @enderror"
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
                                <div class="col-md-8 offset-md-3">
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
@endsection
