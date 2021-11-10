<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'password',
        'role'
    ];


    //Campos que nao serao retornados
    protected $hidden = [
        'password'
    ];

    //relationships
    public function address()
    {
<<<<<<< HEAD
        return $this->hasOne(Address::class);
    }
=======
        return $this->hasOne(Address::class); // relacionamento 1:N
    }

    public function phones(){
        return $this->hasMany(Phone::class); // relacionamento N:N
    }

    //Mutators
>>>>>>> teste

    //Mutators
    
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
