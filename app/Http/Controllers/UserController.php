<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function findAll(){

        $search = request('search');

        if($search){

            $usuarios = Usuario::where('nome', 'like', '%'.$search.'%')
                        ->orwhere('cpf', 'like', '%'.$search.'%')
                        ->orwhere('date', 'like', '%'.$search.'%')->get();

        }else{
            $usuarios = Usuario::all();
        }

        return view('findall', ['usuarios' => $usuarios, 'search' => $search]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $cpf = Usuario::where('cpf', '=', $request->date);

        if($cpf != null){
            return redirect('/')->with('msg', 'Já existe um usuário cadastrado com esse cpf');
        }

        $user = new Usuario;

        $user->nome = $request->nome;
        $user->cpf = $request->cpf;
        $user->date = $request->date;

        $user->save();

        return redirect('/')->with('msg', 'Usuário criado com sucesso');
    }

    public function show($id){

        $user = Usuario::findOrFail($id);

        return view('show', ['user' => $user]);
    }

    public function countUsers(){

        $usuarios = Usuario::all();
        $count = count($usuarios);

        return view('showusers', ['users' => $count]);
    }

    public function edit($id){

        $user = Usuario::findOrFail($id);

        return view('edit', ['user' => $user]);
    }

    public function update(Request $request){

        $user = Usuario::findOrFail($request->id);

        $user->nome = $request->nome;
        $user->cpf= $request->cpf;
        $user->date = $request->date;

        $user->update();

        return redirect('/')->with('msg', 'Usuário atualizado com sucesso');
    }

    public function destroy($id){

        Usuario::findOrFail($id)->delete();

        return redirect('/')->with('msg', "Usuário removido com sucesso");
    }

    public function aniversariantes(){

        $dataAtual = Carbon::now();

        $users = Usuario::whereMonth('date', $dataAtual->month)->orderByRaw('day(date) asc')->get();


        return view('aniversariantes', ['users' => $users]);
    }

}
