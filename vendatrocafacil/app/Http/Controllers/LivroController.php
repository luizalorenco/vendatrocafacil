<?php

namespace App\Http\Controllers;

use App\livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = livro::all();
        // chamando a tela e enviando o objeto $livros
        // como parâmetro
        return view('livros.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nome'      =>      'required|max:35',
            'editora'    =>      'required|max:35',
            'autor'      =>      'required|max:35',
            'genero'    =>      'required|max:35',
            'sinopse'      =>      'required|max:35',
            'paginas'    =>      'required|max:35',
            'ano'      =>      'required|max:35'
        ]);
        // executando o método para a gravação do registro
        $livro = livro::create($validateData);
        // redirecionando para a tela principal do módulo
        // de livros
        return redirect('/livros')->with('success','Dados adicionados com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(livro $livro)
    {
        $livro = livro::findOrFail($id);
        // retornando a tela de visualização com o
        // objeto recuperado
        return view('livros.show',compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit(livro $livro)
    {
        $livro = livro::findOrFail($id);
        // retornando a tela de edição com o
        // objeto recuperado
        return view('livros.edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, livro $livro)
    {
        $validateData = $request->validate([
            'nome'      =>      'required|max:35',
            'editora'    =>      'required|max:35',
            'autor'      =>      'required|max:35',
            'genero'    =>      'required|max:35',
            'sinopse'      =>      'required|max:35',
            'paginas'    =>      'required|max:35',
            'ano'      =>      'required|max:35'

        ]);
        // criando um objeto para receber o resultado
        // da persistência (atualização) dos dados validados 
        livro::whereId($id)->update($validateData);
        // redirecionando para o diretório raiz (index)
        return redirect('/livros')->with('success', 
        'Dados atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(livro $livro)
    {
        $livro = livro::findOrFail($id);
        // realizando a exclusão
        $livro->delete();
        // redirecionando para o diretório raiz (index)
        return redirect('/livros')->with('success', 
        'Dados removidos com sucesso!');
    }
}
