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
        if(Versiculo::create($request->all())){
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
    public function show($Versiculo) //tudo que tem id pode ser trocado por id pois estamos chamando as rotas de outra forma
    {
        $Versiculo = Versiculo::find($Versiculo);//o find pesquisa pelo id da chave primaria
        if($Versiculo){
            return $Versiculo ;
        }else{
            return response()->json([
                'message' => 'erro ao pesquisar o Livro.'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $Versiculo)
    {
        $Versiculo = Versiculo::find($Versiculo);
        if ($Versiculo) {
            $Versiculo->update($request->all());//o all nesse casso é para fazer todos os campos
            return $Versiculo;
        }else{
            return response()->json([
                'message' => 'erro ao atualizar o Livro.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Versiculo)
    {
        if(Versiculo::destroy($Versiculo)){
            return ;
        }else{
            return response()->json([
                'message' => 'erro ao excluir o Livro.'
            ], 404);
        }
    }
}
