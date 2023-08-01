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
        if(Testamento::create($request->all())){
            return response()->json([
                'message' => 'Livro cadastrado com sucesso.'
            ], 201);
        }else{
            return response()->json([
                'message' => 'erro ao cadastrar o Livro.'
            ], 404);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($testamento)
    {
        $Testamento = Testamento::find($testamento);//o find pesquisa pelo id da chave primaria
        if($Testamento){
            return $Testamento ;
        }else{
            return response()->json([
                'message' => 'erro ao pesquisar o Livro.'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $testamento)
    {
        $testamento = Testamento::find($testamento);
        if ($testamento) {
            $testamento->update($request->all());//o all nesse casso é para fazer todos os campos
            return $testamento;
        }else{
            return response()->json([
                'message' => 'erro ao atualizar o Livro.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($testamento)
    {

        if(Testamento::destroy($testamento)){
            return ;
        }else{
            return response()->json([
                'message' => 'erro ao excluir o Livro.'
            ], 404);
        }
    }
}
