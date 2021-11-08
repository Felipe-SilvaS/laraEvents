<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Participante</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>

<body>
    <h1 class="text-center my-4">Criar conta</h1>

    <div class="card shadow my-5 w-75 mx-auto">
        <div class="card-body">
            <form action="{{ route('auth.register.store') }}" method="POST">
                @csrf

                <!-- inputs do dados basicos do usuario -->
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="user[name]" class="form-control" placeholder="Nome">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="user[email]" class="form-control" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="user[cpf]" class="form-control" placeholder="CPF">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="password" name="user[password]" class="form-control" placeholder="Senha">
                        </div>
                    </div>
                </div>

                <hr>

                <!-- inputs do Endereço -->
                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="address[cep]" class="form-control" placeholder="CEP">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="text" name="address[uf]" class="form-control" placeholder="UF">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input type="text" name="address[city]" class="form-control" placeholder="Cidade">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="text" name="address[street]" class="form-control" placeholder="Logradouro">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="address[number]" class="form-control" placeholder="Número">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="address[district]" class="form-control" placeholder="Bairro">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="address[complement]" class="form-control"
                                placeholder="Complemento">
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-success btn-block mt-3">Criar conta</button>
            </form>
        </div>
    </div>
</body>

</html>
