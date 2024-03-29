<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'street',
        'number',
        'uf',
        'city',
        'district',
        'complemet',
        'user_id'
    ];

    //relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
