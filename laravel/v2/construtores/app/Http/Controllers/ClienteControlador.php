<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    public function index()
    {
        return "Lista de todos clientes";
    }

    public function create()
    {
        return "Formulário para cadastrar novo cliente";
    }

    public function store(Request $request)
    {
        $s = "Armazenar:";
        $s .= "Nome: ". $request->input('name')." e ";
        $s .= "Idade: ". $request->input('idade');
        return response($s,201);
    }

    public function show($id)
    {
        $v = ["Nome1","nome2","nome3","nome4","nome5"];
        if($id>= 0 && $id < count($v)){
            return $v[$id];
        }else{
            return "Id inválido";
        }
    }

    public function edit($id)
    {
        return "Editar cliente de id:".$id;
    }

    public function update(Request $request, $id)
    {
        $s = "Atualizar cliente com id $id:";
        $s .= "Nome: ". $request->input('name')." e ";
        $s .= "Idade: ". $request->input('idade');
        return response($s,201);
    }

    public function destroy($id)
    {
        return response("Apagado cliente com id $id",200);
    }

    public function requisitar(Request $request){
        echo "Nome :".$request->input('name');
    }
}
