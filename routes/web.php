<?php

use App\Livewire\Fornecedores;
use App\Livewire\Login;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoEdit;
use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)
    ->name('login');

Route::get('/fornecedores', Fornecedores::class)->name('fornecedor');

Route::get('/produtoindex', ProdutoIndex::class)->name('produto.index');

Route::get('/produtocreate', ProdutoCreate::class)->name('produtos.create');

Route::get('/produtoedit', ProdutoEdit::class)->name('produtos.edit');