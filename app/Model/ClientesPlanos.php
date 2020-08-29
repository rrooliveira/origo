<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClientesPlanos extends Model
{
    protected $table = 'clientes_planos';
    public $timestamps = false;

    protected $fillable = [
        'id_cliente', 'id_plano'
    ];

    public function planosPorCliente(int $clienteId)
    {
        return self::query()
            ->join('planos', 'planos.id', '=', 'clientes_planos.id_plano', 'inner')
            ->where('id_cliente', $clienteId)
            ->paginate();
    }

    public function verificarPlanoJaCadastrado(int $idPlano, int $idCliente)
    {
        return self::query()
            ->where('id_plano', $idPlano)
            ->where('id_cliente', $idCliente)
            ->first();
    }
}
