<?php

namespace App\Http\Controllers;

use App\Articulo;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulos.index', compact('articulos'));
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
        return View('articulos.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articulo  $Articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $Articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articulo  $Articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $Articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulo  $Articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $Articulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulo  $Articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $Articulo)
    {
        //
    }
}
