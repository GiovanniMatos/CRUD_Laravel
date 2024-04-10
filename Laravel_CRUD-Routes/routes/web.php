<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Usuario;


Route::post('/inserir', function (Request $request) {
    Usuario::create([
        "nome" => $request->nome,
        "email" => $request->email
    ]);
    return redirect()->back();
 });
 
Route::get('/', function (){
     $usuarios = Usuario::all();
     return view('welcome', ['usuarios' => $usuarios]);
 });

Route::get('/read/{id_usuario}', function ($id_usuario){
    $usuario = Usuario::findOrFail($id_usuario);
    echo "ID: ", $usuario -> id;
    echo "<br/>";
    echo "Nome: ", $usuario -> nome;
    echo "<br/>";
    echo "Email: ", $usuario -> email;    
});


Route::get('/editar/{id_usuario}', function ($id_usuario){
    $usuario = Usuario::findOrFail($id_usuario);
    return view('editar', [ 'usuario' => $usuario ]);
});

Route::put('/update/{id_usuario}', function (Request $novos_dados, $id_usuario) {
    $usuario = Usuario::findOrFail($id_usuario);
    $usuario -> nome = $novos_dados -> nome;
    $usuario -> email = $novos_dados -> email;
    $usuario -> save();
    return redirect('/');
});

Route::get('/delete/{id_usuario}', function ($id_usuario) {
    $usuario = Usuario::findOrFail($id_usuario);
    $usuario -> delete();
    echo "Usuário excluído: ", $usuario -> nome;
    return redirect('/');
});