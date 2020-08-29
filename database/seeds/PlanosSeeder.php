<?php

use Illuminate\Database\Seeder;

class PlanosSeeder extends Seeder
{
    public function run()
    {
        $planos = [
          ['plano' => 'Free', 'mensalidade' => '0.00'],
          ['plano' => 'Basic', 'mensalidade' => '100.00'],
          ['plano' => 'Plus', 'mensalidade' => '187.00'],
        ];

        foreach ($planos as $plano) {
            DB::table('planos')->insert($plano);
        }
    }
}
