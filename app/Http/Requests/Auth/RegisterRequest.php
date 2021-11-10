<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use App\Rules\Cpf;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() //determina se o usuário está aurorizada a realizar está requisição
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user.name' => 'required',
            'user.email' => ['required', 'email', 'unique:users,email'],
            'user.cpf' => ['required', new Cpf, 'unique:users,cpf'],
            'user.password' => ['required', 'min:8', 'confirmed  '],
            'phone.0.number' => ['required', 'sized:20'],
            'phone.1.number' => ['required', 'sized:20'],
            'address.cep' => 'required',
            'address.uf' => ['required', 'size:2'],
            'address.city' => 'required',
            'address.street' => 'required',
            'address.number' => ['required', 'numeric', 'integer'],
            'address.district' => 'required',
            'address.complment' => ['nullable', 'max:25']
        ];
    }

    public function attributes()
    {
        return [
            'user.name' => 'nome',
            'user.email' => 'email',
            'user.cpf' => 'CPF',
            'user.password' => 'senha',
            'phone.0.number' => 'telefone',
            'phone.1.number' => 'celular',
            'address.cep' => 'CEP',
            'address.uf' => 'UF',
            'address.city' => 'cidade',
            'address.street' => 'rua',
            'address.number' => 'numero',
            'address.district' => 'bairro',
            'address.complment' => 'complemento'
        ];
    }


}
