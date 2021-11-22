<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;


class CreateOrganzationUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:organization-user {name} {email} {cpf} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria um novo usuário do tipo organização';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        $cpf = $this->argument('cpf');
        $password = $this->argument('password');

        User::create([
            'name' => $name,
            'email' => $email,
            'cpf' => $cpf,
            'password' => $password,
            'role' => 'organization'
        ]);

        $this->info('Usuário cadastrado com sucesso!');
    }
}
