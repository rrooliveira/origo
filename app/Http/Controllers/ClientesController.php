<?php

namespace App\Http\Controllers;

use App\Enums\PlanosEnum;
use App\Model\Clientes;
use App\Model\ClientesPlanos;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->classe = new Clientes();
    }

    public function delete (int $id)
    {
        try {
            DB::beginTransaction();

            $cliente = Clientes::where('id', $id)->first();
            $planosCliente = ClientesPlanos::where('id_cliente', $id)->get();

            //Deletar planos vinculados ao cliente
            foreach ($planosCliente as $planos) {
                if ($planos->id_plano === PlanosEnum::FREE && trim($cliente->estado) === PlanosEnum::ESTADO_BLOQUEADO) {
                    throw new \RuntimeException('Clientes do plano FREE, do estado de São Paulo, não podem ser excluídos.');
                } elseif (!ClientesPlanos::destroy($planos->id)) {
                    throw new \RuntimeException('Não foi possível remover o plano vinculado ao cliente.');
                }
            }

            //Deletar cliente
            if (!$this->classe::destroy($id)) {
                throw new \RuntimeException('Cliente pode ser deletado.');
            }

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Cliente removido com sucesso.'], 200);

        } catch (\RuntimeException $e) {
            DB::rollback();
            return response()->json(['success' => false, 'message' => $e->getMessage()], 404);
        }
    }
}
