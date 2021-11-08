<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
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
        $requestData['role'] = 'participant';
        User::create($requestData);
        
        /*

        CODIGO PARA TRANSFORMAR SALVAR HASH DA SENHA NO BD
        $password = bcrypt($requestData['password']);

        $requestData['password'] = $password; */


    }
}
