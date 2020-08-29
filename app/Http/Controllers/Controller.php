<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $classe;

    public function index(Request $request)
    {
        $data = [
            'success' => true,
            'data' => $this->classe::paginate($request->per_page)
        ];

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->getRules(), $this->getMessages());

        $data = [
            'success' => true,
            'data' => $this->classe->create($request->all())
        ];

        return response()->json($data, 201);
    }

    public function show(int $id)
    {
        $resource = $this->classe::find($id);

        if (is_null($resource)) {
            return response()->json(['success' => false, 'message' => 'Recurso não encontrado.'], 404);
        }

        $data = [
            'success' => true,
            'data' => $resource
        ];

        return response()->json($data);
    }

    public function update (Request $request, int $id)
    {
        $this->validate($request, $this->getRules(), $this->getMessages());

        $resource = $this->classe::find($id);

        if (is_null($resource)) {
            return response()->json(['success' => false, 'message' => 'Recurso não encontrado.'], 404);
        }

        $resource->fill($request->all());
        $resource->save();

        $data = [
            'success' => true,
            'data' => $resource
        ];

        return response()->json($data);
    }

    public function delete (int $id)
    {
        $qtResourceDeleted = $this->classe::destroy($id);

        if ($qtResourceDeleted === 0){
            return response()->json(['success' => false, 'message' => 'Recurso não encontrado.'], 404);
        }

        return response()->json(['success' => true, 'message' => 'Recurso deletado com sucesso.'], 200);
    }

    public function getRules()
    {
        return [
            'nome' => 'required|max:250',
            'email' => 'required|email|unique:clientes',
            'telefone' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'data_nascimento' => 'required|date',
        ];
    }

    public function getMessages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'unique' => 'O :attribute informado já está sendo utilizado.',
            'date' => 'O campo :attribute não é uma data válida.',
            'max' => [
                'numeric' => 'O campo :attribute não pode ser superior a :max caracteres.'
            ],
            'integer' => 'O campo :attribute deve ser um inteiro'
        ];
    }
}
