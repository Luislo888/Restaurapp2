<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;
use App\Models\Comanda;
use App\Models\ComandaProducto;
use App\Models\UsersComandas;

class CamareroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('middlecamarero', ['only' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrantes = Producto::all()->where('categoria', 'entrantes');
        $primeros = Producto::all()->where('categoria', 'primeros');
        $segundos = Producto::all()->where('categoria', 'segundos');
        $bebidas = Producto::all()->where('categoria', 'bebidas');

        // $comanda = Comanda::all()->where('estado', 'abierta')->where('camarero_id', Auth::user()->id)->first();
        // $comanda = Comanda::all()->where('estado', 'abierta')->where(UsersComandas::all()->id, Auth::user()->id);
        // $comanda = Comanda::all()->where('estado', 'abierta')->where(UsersComandas::all()->where('user_id',  Auth::user()->id));

        // $usersComandas = UsersComandas::all()->where('user_id',  Auth::user()->id);
        $camarero = Auth::user()->name;

        // $comandas = Comanda::all()->where('id', UsersComandas::all()->comanda_id);

        // $comanda = Comanda::all()->where('id', UsersComandas::all()->where('user_id',  Auth::user()->id)->first());

        // $comandas = null;
        // $comanda

        // foreach (Comanda::all()->whereIn('id',$usersComandas->comanda_id) as $asdf) {
        //     $comandas[] = $asdf->id;
        // }

        $comandas =  Comanda::addSelect([
            'id' => UsersComandas::select('id')
                ->whereColumn('comanda_id', 'comandas.id')
                ->where('user_id', 2)
            // ->where('comandas.estado', 'abierta')
        ])->where('estado', 'abierta')->get();




        // for ($i = 0; $i < $usersComandas; $i++) {

        //     $comanda_id[] = $usersComandas[$i]->comanda_id;
        // }


        $asdf = 'asdf';

        return view('camarero', ['camarero' => $camarero, 'entrantes' => $entrantes, 'primeros' => $primeros, 'segundos' => $segundos, 'bebidas' => $bebidas, 'comandas' => $comandas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
