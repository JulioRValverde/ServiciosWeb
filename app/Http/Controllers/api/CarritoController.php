<?php

namespace App\Http\Controllers\api;

use App\CarritoProducto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = CarritoProducto::create($request->all());
        return response()->json(['data' => $product], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = CarritoProducto::create($request->all());
        return response()->json(['data' => $product], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CarritoProducto  $carritoProducto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = DB::table('carrito_productos')->where('carrito_id',$id)
            ->join('productos', 'productos.id', '=', 'carrito_productos.producto_id')
            ->select('productos.*')
            ->get();
            

        return response()->json(['data' => $products], 200);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CarritoProducto  $carritoProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(CarritoProducto $carritoProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CarritoProducto  $carritoProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarritoProducto $carritoProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarritoProducto  $carritoProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarritoProducto $carritoProducto)
    {
        //
    }

    public function agregar(Request $request)
    {
        DB::table('carrito_productos')->insert($request->all(

        )
            
        );
    }
}
