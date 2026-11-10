<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
    'nome',
    'descricao',
    'marca',
    'categoria',
    'unidade_de_medida',
    'preco_de_custo',
    'preco_de_venda',
    'quantidade',
    'estoque_minimo',
 
    ];
}
