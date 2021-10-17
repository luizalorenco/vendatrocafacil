<?php

namespace App\Http\Controllers;

use App\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = usuario::all();
        // chamando a tela e enviando o objeto $usuarios
        // como parâmetro
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('usuarios.create');
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
            'senha'    =>      'required|max:35',
            'genero'      =>      'required|max:35',
            'data_nasc'    =>      'required|max:35',
            'cpf'      =>      'required|max:35',
            'endereco'    =>      'required|max:35',
            'celular'      =>      'required|max:35',
            'email'    =>      'required|max:35'
        ]);
        // executando o método para a gravação do registro
        $usuario = usuario::create($validateData);
        // redirecionando para a tela principal do módulo
        // de usuarios
        return redirect('/usuarios')->with('success','Dados adicionados com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        $usuario = usuario::findOrFail($id);
        // retornando a tela de visualização com o
        // objeto recuperado
        return view('usuarios.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        $usuario = usuario::findOrFail($id);
        // retornando a tela de edição com o
        // objeto recuperado
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        $validateData = $request->validate([
            'nome'      =>      'required|max:35',
            'senha'    =>      'required|max:35',
            'genero'      =>      'required|max:35',
            'data_nasc'    =>      'required|max:35',
            'cpf'      =>      'required|max:35',
            'endereco'    =>      'required|max:35',
            'celular'      =>      'required|max:35',
            'email'    =>      'required|max:35'
        ]);
        // criando um objeto para receber o resultado
        // da persistência (atualização) dos dados validados 
        usuario::whereId($id)->update($validateData);
        // redirecionando para o diretório raiz (index)
        return redirect('/usuarios')->with('success', 
        'Dados atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario $usuario)
    {
        $usuario = usuario::findOrFail($id);
        // realizando a exclusão
        $usuario->delete();
        // redirecionando para o diretório raiz (index)
        return redirect('/usuarios')->with('success', 
        'Dados removidos com sucesso!');
    }
}
