<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = ['nome','nome1', 'telefone', 'email', 'cep', 'logradouro', 'complemento', 'bairro', 'localidade', 'uf', 'telefone1'
    , 'telefone2', 'telefone3', 'telefone4', 'telefone5', 'telefone6', 'telefone7', 'telefone8', 'telefone9'];
}
