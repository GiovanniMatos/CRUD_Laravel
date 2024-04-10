<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('welcome', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Usuario::create([
            "nome" => $request->nome,
            "email" => $request->email
        ]);
        echo"user adicionado";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_usuario)
    {
        $usuario = Usuario::findOrFail($id_usuario);
        return view('editar', [ 'usuario' => $usuario ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $novos_dados, $id_usuario)
    {
        $usuario = Usuario::findOrFail($id_usuario);
        $usuario -> nome = $novos_dados -> nome;
        $usuario -> email = $novos_dados -> email;
        $usuario -> save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_usuario)
    {
        $usuario = Usuario::findOrFail($id_usuario);
        $usuario -> destroy($id_usuario);
        echo "Usuário excluído: ", $usuario -> nome;
        return redirect('/');
    }
}
