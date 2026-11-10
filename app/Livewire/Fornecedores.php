<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Fornecedores extends Component
{
public $nome;
public $CPF;
public $telefone;
public $endereco;
public $email;

    public function salvar()
    {
        $this->validate([
            'nome' => 'required',
            'CPF' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'email'=> 'required|email',
        ]);

        $credenciais = [
            'nome' => $this->nome,
            'CPF' => $this->CPF,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
            'email' => $this->email,
        ];

        if (Auth::attempt($credenciais)) {
            session()->regenerate();

            return redirect()->route('produto.index');
        }

        session()->flash(
            'error',
            'E-mail ou CPF inválidos.'
        );
    }

    public function render()
    {
        return view('livewire.fornecedores');
    }
}