<?php

namespace App\Http\Controllers\Auth;

use App\Models\{User, Adrress};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $requestData['user']['role'] = 'participant' ;

        $user = User::create($requestData['user']);

        $user->address()->create($requestData['address']);

        /*
        CODIGO DE RELACIONAMENTO ENTRE user e address

        $requestData['address']['user_id'] = $user->id;
        Address::create($requestData['address']);


        CODIGO PARA TRANSFORMAR SALVAR HASH DA SENHA NO BD
        $password = bcrypt($requestData['password']);

        $requestData['password'] = $password; */


    }
}
