<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Exibe a listagem de todos usuarios.
     */
    public function index()
    {
      return response()->json( User::select('id','nome','email','cpf')->get() );
    }

    /**
     * Insere uma novo usuario no banco.
     */
    public function store(Request $request)
    {
        $result = collect([]);
        $validator = Validator::make($request->all(),[
            'nome' => 'required',
            'email' => 'required|email',
            'cpf' => 'required|numeric|digits:11'
        ]);

        if( $validator->fails() ){
            $result->put('create', false);
            $result->put('msg_validator', $validator->errors());
            $result->put('msg', 'Não foi possível criar o usuário, verificar os dados');
        } else {
            $user = new User;

            $user->nome = $request->nome;
            $user->cpf = $request->cpf;
            $user->email = $request->email;
            $user->save();
            $result->put('user',$user);
            $result->put('create', true);
            $result->put('msg','Usuário criado com sucesso');
        }

        return response()->json($result);
    }

    /**
     * Faz a consulta de um usuario pelo id
     */
    public function show($id)
    {
        $user = User::select('id','nome','email','cpf')->where('id',$id)->get();
        return response()->json($user);
    }

    /**
     * Grava alterações do usuario no BD
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $diff = collect([]);
        $result = collect([]);

        foreach ($request->all()as $key => $value) {
            if($value !== $user[$key]){
                $diff->put($key,$value);
            }
        }

        if($diff->isNotEmpty()){
            foreach ($diff as $key => $value) {
                $user->$key = $value;
            }
            $user->save();
            $result->put('alter',true);
            $result->put('msg','Dados alterado com sucesso');
            $result->put('user',User::select('id','nome','email','cpf')->where('id',$id)->get());
        } else {
            $result->put('alter',false);
            $result->put('msg','Dados sem alteração');
        }

        return response($result);
    }

    /**
     * Remove o usuario do BD
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json(['msg' => 'Usuario removido com sucesso']);
    }
}
