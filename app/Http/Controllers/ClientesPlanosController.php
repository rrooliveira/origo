<?php

namespace App\Http\Controllers;

use App\Model\Clientes;
use App\Model\ClientesPlanos;
use http\Exception\RuntimeException;
use Illuminate\Http\Request;

class ClientesPlanosController extends Controller
{
    public function __construct()
    {
        $this->classe = new ClientesPlanos();
    }

    public function store(Request $request)
    {
        try {

            if (!isset($request['id_plano']) || is_null($request['id_plano'])) {
                throw new RuntimeException('Necessário enviar os dados dos planos em formato array.');
            } elseif (!isset($request['id_cliente']) || is_null($request['id_cliente'])) {
                throw new \RuntimeException('Necessário enviar o código do cliente.');
            }

            $this->validate($request, $this->getRules(), $this->getMessages());

            //Verificar se o cliente é válido
            $cliente = Clientes::where('id', $request->id_cliente)->first();

            if (is_null($cliente)) {
                throw new \RuntimeException('Cliente não encontrado.');
            }

            //Verificar se o cliente já possui o plano cadastrado
            $clientePlano = new ClientesPlanos();
            $jaCadastrado = $clientePlano->verificarPlanoJaCadastrado($request->id_plano, $request->id_cliente);

            if ($jaCadastrado) {
                throw new \RuntimeException('Cliente já possui plano cadastrado.');
            }

            $data = [
                'success' => true,
                'data' => $this->classe->create($request->all())
            ];

            return response()->json($data, 201);
        } catch (\RuntimeException $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 422);
        }
    }

    public function show(int $clienteId)
    {
        $clientesPlanos = new ClientesPlanos();

        return $clientesPlanos->planosPorCliente($clienteId);
    }

    public function getRules()
    {
        return [
            'id_cliente' => 'required|integer|min:1',
            'id_plano.*' => 'required|integer|min:1|max:3'
        ];
    }
}
