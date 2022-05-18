<?php

namespace App\Http\Controllers;
use App\DynamicField;
use Illuminate\Http\Request;
use Validador;

class DynamicFieldController extends Controller
{
    function index(    ){
        return view ('dynamic_field');


    }
    function insert(Request $request)
    {
     if($request->ajax())
     {
      $rules = array(
       'nome_dynamic.*'  => 'required',
       'last_name.*'  => 'required'
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $nome_dynamic = $request->nome_dynamic;
      $last_name = $request->last_name;
      for($count = 0; $count < count($nome_dynamic); $count++)
      {
       $data = array(
        'nome_dynamic' => $nome_dynamic[$count],
        'last_name'  => $last_name[$count]
       );
       $insert_data[] = $data; 
      }

      DynamicField::insert($insert_data);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
    }
}
