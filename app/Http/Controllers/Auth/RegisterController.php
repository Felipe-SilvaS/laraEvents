<?php

namespace App\Http\Controllers\Auth;

use App\Models\{User, Adrress};
<<<<<<< HEAD
=======
use App\Http\Requests\Auth\RegisterRequest;
>>>>>>> teste
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
<<<<<<< HEAD
        $requestData = $request->all();
        $requestData['user']['role'] = 'participant' ;

        $user = User::create($requestData['user']);

        $user->address()->create($requestData['address']);
=======
        $requestData = $request->validated();

        $requestData['user']['role'] = 'participant';

        DB::beginTransaction();
        try {
            $user = User::create($requestData['user']); // cria o usuario

            $user->address()->create($requestData['address']); //cria o edereco

            foreach ($requestData['phones'] as $phone) {
                $user->phones()->create($phone);            //cria o telefone
            }
            DB::commit();
            return 'Mensagem: usuário cadastrado';
        } catch (\Exception $exception) {
            DB::rollback();
            return 'Mesagem: ' . $exception->getMessage();
        }
>>>>>>> teste

        /*
        CODIGO DE RELACIONAMENTO ENTRE user e address

        $requestData['address']['user_id'] = $user->id;
        Address::create($requestData['address']);


        CODIGO PARA TRANSFORMAR SALVAR HASH DA SENHA NO BD
        $password = bcrypt($requestData['password']);

        $requestData['password'] = $password; */
    }
}
