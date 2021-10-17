<?php

namespace App\Http\Controllers;

use App\Inicial;
use Illuminate\Http\Request;

class InicialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inicials = inicial::all();
        // chamando a tela e enviando o objeto $inicials
        // como parâmetro
        return view('inicials.index', compact('inicials'));
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
     * @param  \App\Inicial  $inicial
     * @return \Illuminate\Http\Response
     */
    public function show(Inicial $inicial)
    {
        $inicial = inicial::findOrFail($id);
        // retornando a tela de visualização com o
        // objeto recuperado
        return view('inicials.show',compact('inicial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inicial  $inicial
     * @return \Illuminate\Http\Response
     */
    public function edit(Inicial $inicial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inicial  $inicial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inicial $inicial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inicial  $inicial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inicial $inicial)
    {
        //
    }
}
