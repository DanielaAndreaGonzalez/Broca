<?php

namespace App\Http\Controllers;

use App\Evaluador;
use App\Tipoevaluador;
use Illuminate\Http\Request;

class EvaluadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('principal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoevaluadores = Tipoevaluador::all();

        return view('evaluadorGrabar', compact('tipoevaluadores'));

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
     * @param  \App\Evaluador  $evaluador
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluador $evaluador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluador  $evaluador
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluador $evaluador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluador  $evaluador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluador $evaluador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluador  $evaluador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluador $evaluador)
    {
        //
    }
}
