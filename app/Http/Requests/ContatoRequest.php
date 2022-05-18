<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
        $rules = [
            'nome'         => "required|min:2|max:190",
            'nome1'     => "required|min:2|max:190",
            'telefone'     => "required|min:10",
            'email'        => "required|email",
            'cep'          => "required",
            'logradouro'   => "required",
            'complemento',
            'telefone2',
            'telefone3',
            'telefone4',
            'telefone5',
            'telefone6',
            'telefone7',
            'telefone8',
            'telefone9',
            'bairro'       => "required",
            'localidade'   => "required",
            'uf'           => "required|min:2"

        ];

        switch($this->method()) {
            case "POST": // CRIAÇÃO DE UM NOVO REGISTRO
                $rules["email"]    .= "|unique:contatos";
                $rules["telefone"] .= "|unique:contatos";
                break;
            case "PUT": // ATUALIZAÇÃO DE UM REGISTRO EXISTENTE
                $rules["email"]    .= "|unique:contatos,email,".$this->id;
                $rules["telefone"] .= "|unique:contatos,telefone,".$this->id;
                break;
            default:break;
        }

        return $rules;
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            'nome'         => "trim",
            'nome1'  => "trim",
            'telefone'     => "trim",
            'telefone1'     => "trim",
            'telefone2'     => "trim",
            'telefone3'     => "trim",
            'telefone4'     => "trim",
            'telefone5'     => "trim",
            'telefone6'     => "trim",
            'telefone7'     => "trim",
            'telefone8'     => "trim",
            'telefone9'     => "trim",
            'email'        => "trim",
            'cep'          => "trim",
            'logradouro'   => "trim",
            'complemento'  => "trim",
            'bairro'       => "trim",
            'localidade'   => "trim",
            'uf'           => "trim"
        ];
    }
}
