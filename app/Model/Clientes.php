<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'estado',
        'cidade',
        'data_nascimento'
    ];

    public function planos()
    {
        return parent::hasMany(Planos::class, 'id_cliente', 'id');
    }
}
