<?php

use Illuminate\Database\Seeder;

class ClientesPlanosSeeder extends Seeder
{
    public function run()
    {
        $clientes_planos = [
            ['id_cliente' => '1', 'id_plano' => '1'],
            ['id_cliente' => '1', 'id_plano' => '2'],
            ['id_cliente' => '1', 'id_plano' => '3'],
            ['id_cliente' => '2', 'id_plano' => '2'],
            ['id_cliente' => '3', 'id_plano' => '3'],
        ];

        foreach ($clientes_planos as $cliente_plano) {
            DB::table('clientes_planos')->insert($cliente_plano);
        }
    }
}
