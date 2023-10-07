<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalSport extends Model
{
    use HasFactory;

    protected $fillable = [
        'esprotes',
        'rua',
        'bairro',
        'complemento',
        'descricao',
    ];

}
