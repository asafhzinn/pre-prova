<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $marca; 
    public $categoria;
    public $unidade_de_medida;
    public $preco_de_custo;
    public $preco_de_venda;
    public $quantidade;
    public $estoque_minimo;
   

    public function create(){
        Produto::create([
        'nome' =>$this->nome,
        'descricao'=>$this->descricao,
        'marca'=>$this->marca,
        'categoria'=>$this->categoria,
        'unidade_de_medida'=>$this->unidade_de_medida,
        'preco_de_custo'=>$this->preco_de_custo,
        'preco_de_venda'=>$this->preco_de_venda,
        'quantidade'=>$this->quantidade,
        'estoque_minimo'=>$this->estoque_minimo,
       
        ]);
    }
    public function render()
    {
        session()->flash(
            'success',
            'Produto cadastrado com sucesso!'
        );
        return view('livewire.produto-create');
    }
}
