<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicField extends Model
{
    protected $fillable = [
        'nome_dynamic', 'telefone_dynamic'
    ];
}
