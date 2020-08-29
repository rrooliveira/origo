<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Planos extends Model
{
    protected $table = 'planos';
    public $timestamps = false;

    protected $fillable = [
        'plano', 'mensalidade'
    ];
}
