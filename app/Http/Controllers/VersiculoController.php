<?php

namespace App\Http\Controllers;

use App\Models\Versiculo;
use Illuminate\Http\Request;

class VersiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Versiculo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Versiculo::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($Versiculo) //tudo que tem id pode ser trocado por id pois estamos chamando as rotas de outra forma
    {
        return Versiculo::findOrFail($Versiculo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $Versiculo)
    {
        $Versiculo = Versiculo::findOrFail($Versiculo);
        $Versiculo->update($request->all());//o all nesse casso é para fazer todos os campos
        return $Versiculo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Versiculo)
    {
        return Versiculo::destroy($Versiculo);
    }
}
