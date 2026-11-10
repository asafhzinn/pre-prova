<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $id;
    public $nome;
    public $descricao;
    public $marca; 
    public $categoria;
    public $unidade_de_medida;
    public $preco_de_custo;
    public $preco_de_venda;
    public $quantidade;
    public $estoque_minimo;
    public $fornecedor;

    public function mount($id)
    {
        $produto = Produto::find($id);
        $this->id = $produto->id;
        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->marca = $produto->marca;
        $this->categoria = $produto->categoria;
        $this->unidade_de_medida = $produto->unidade_de_medida;
        $this->preco_de_custo = $produto->preco_de_custo;
        $this->preco_de_venda = $produto->preco_de_venda;
        $this->quantidade = $produto->quantidade;
        $this->estoque_minimo = $produto->estoque_minimo;
      
    }

    public function update()
{
    $produto = Produto::find($this->id);
    $produto->nome = $this->nome;
    $produto->descricao = $this->descricao;
    $produto->marca = $this->marca;
    $produto->categoria = $this->categoria;
    $produto->unidade_de_medida = $this->unidade_de_medida;
    $produto->preco_de_custo = $this->preco_de_custo;
    $produto->preco_de_venda = $this->preco_de_venda;
    $produto->quantidade = $this->quantidade;
    $produto->estoque_minimo = $this->estoque_minimo;

    $produto->save();
}


    public function render()
    {
         session()->flash(
            'success',
            'Produto editado com sucesso!'
        );
        return view('livewire.produto-edit');
    }
}
