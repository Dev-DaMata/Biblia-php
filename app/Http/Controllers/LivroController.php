<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Livro::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Livro::create($request->all())){
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
    public function show($livro)
    {
        $livro = Livro::find($livro);//o find pesquisa pelo id da chave primaria
        if($livro){
            return $livro ;
        }else{
            return response()->json([
                'message' => 'erro ao pesquisar o Livro.'
            ], 404);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $livro)
    {
        $livro = Livro::find($livro);
        if ($livro) {
            $livro->update($request->all());//o all nesse casso é para fazer todos os campos
            return $livro;
        }else{
            return response()->json([
                'message' => 'erro ao atualizar o Livro.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($livro)
    {
        if(Livro::destroy($livro)){
            return ;
        }else{
            return response()->json([
                'message' => 'erro ao excluir o Livro.'
            ], 404);
        }


    }
}
