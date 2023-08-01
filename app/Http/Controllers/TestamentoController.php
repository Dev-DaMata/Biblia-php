<?php

namespace App\Http\Controllers;

use App\Models\Testamento;
use Illuminate\Http\Request;

class TestamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Testamento::all();//para retonar todos os dados
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Testamento::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($testamento)
    {
        return Testamento::findOrFail($testamento);//o findOrFail vai dar erro 404 se não achar o id
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $testamento)
    {
        $testamento = Testamento::findOrFail($testamento);
        $testamento->update($request->all());//o all nesse casso é para fazer todos os campos
        return $testamento;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($testamento)
    {
        return Testamento::destroy($testamento);
    }
}
