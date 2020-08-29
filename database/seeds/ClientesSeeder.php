<?php

use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        $clientes = [
            ['nome' => 'Claudianus Boast', 'email' => 'cboast0@fastcompany.com', 'telefone' => '(19) 957645371', 'estado' => 'São Paulo', 'cidade' => 'Araraquara', 'data_nascimento' => '1993-06-07'],
            ['nome' => 'Loni Jennions', 'email' => 'ljennions1@va.gov', 'telefone' => '(19) 905613161', 'estado' => 'São Paulo', 'cidade' => 'Limeira', 'data_nascimento' => '1985-05-09'],
            ['nome' => 'Margi Gilhouley', 'email' => 'mgilhouley2@telegraph.co.uk', 'telefone' => '(19) 966290104', 'estado' => 'São Paulo', 'cidade' => 'Araraquara', 'data_nascimento' => '1984-09-13'],
            ['nome' => 'Lexy Sprulls', 'email' => 'sprulls3@moonfruit.com', 'telefone' => '(19) 976121601', 'estado' => 'São Paulo', 'cidade' => 'Rio Claro', 'data_nascimento' => '1999-10-19'],
            ['nome' => 'Marie Shatliff', 'email' => 'mshatliff4@cbslocal.com', 'telefone' => '(19) 991376354', 'estado' => 'São Paulo', 'cidade' => 'Rio Claro', 'data_nascimento' => '1990-07-20'],
            ['nome' => 'Graig Mouncey', 'email' => 'gmouncey5@so-net.ne.jp', 'telefone' => '(19) 941806149', 'estado' => 'São Paulo', 'cidade' => 'Araraquara', 'data_nascimento' => '1993-03-27'],
            ['nome' => 'Laurice Liger', 'email' => 'lliger0@php.net', 'telefone' => '(35) 971740954', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'data_nascimento' => '1992-10-25'],
            ['nome' => 'Kendrick Sooper', 'email' => 'ksooper1@slate.com', 'telefone' => '(31) 944324086', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'data_nascimento' => '1981-06-20'],
            ['nome' => 'Gordon Levington', 'email' => 'glevington2@hpost.com', 'telefone' => '(31) 922405868', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'data_nascimento' => '1993-11-25'],
            ['nome' => 'Noam Scolland', 'email' => 'nscolland3@mozilla.org', 'telefone' => '(35) 996817669', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'data_nascimento' => '1999-12-31'],
            ['nome' => 'Lindon Skehens', 'email' => 'skehens4@npr.org', 'telefone' => '(35) 967671104', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'data_nascimento' => '1985-01-10'],
            ['nome' => 'Kimbra Rase', 'email' => 'krase5@topsy.com', 'telefone' => '(35) 999428030', 'estado' => 'Minas Gerais', 'cidade' => 'Areado', 'data_nascimento' => '1999-05-05'],
            ['nome' => 'Lorenzo Fisk', 'email' => 'lfisk6@businessweek.com', 'telefone' => '(31) 912695467', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'data_nascimento' => '1985-12-22'],
            ['nome' => 'Bourke Flavelle', 'email' => 'bflavelle7@fc2.com', 'telefone' => '(35) 959386145', 'estado' => 'Minas Gerais', 'cidade' => 'Itapeva', 'data_nascimento' => '1984-04-10'],
            ['nome' => 'Curran McSharry', 'email' => 'cmcsharry8@webeden.co.uk', 'telefone' => '(35) 902916131', 'estado' => 'Minas Gerais', 'cidade' => 'Itapeva', 'data_nascimento' => '1983-01-15'],
            ['nome' => 'Aveline Dowtry', 'email' => 'adowtry9@miibeian.gov.cn', 'telefone' => '(31) 945227500', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'data_nascimento' => '1994-12-23'],
            ['nome' => 'John Sebastian', 'email' => 'jsebastiana@cbslocal.com', 'telefone' => '(31) 907366740', 'estado' => 'Minas Gerais', 'cidade' => 'Belo Horizonte', 'data_nascimento' => '1998-04-06'],
            ['nome' => 'Reynolds Greenan', 'email' => 'rgreenanb@bloomberg.com', 'telefone' => '(35) 923551410', 'estado' => 'Minas Gerais', 'cidade' => 'Itapeva', 'data_nascimento' => '1985-07-19']
        ];

        foreach ($clientes as $cliente) {
            DB::table('clientes')->insert($cliente);
        }
    }
}
