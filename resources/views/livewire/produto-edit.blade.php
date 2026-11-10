<form>
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Nome" wire:model="nome">
  </div>
  <div class="mb-3">
    <label for="descricao" class="form-label">Descrição</label>
    <input type="descricao" class="form-control" id="descricao" placeholder="Escreva..." wire:model="Descrição">
  </div>
    <div class="mb-3">
    <label for="marca" class="form-label">Marca</label>
    <input type="marca" class="form-control" id="Marca" placeholder="Marca" wire:model="marca">
  </div>
    <div class="mb-3">
    <label for="Categoria" class="form-label">Categoria</label>
    <input type="Categoria" class="form-control" id="Categoria" placeholder="Escolha a categoria" wire:model="categoria_id'>
  </div>
    <div class="mb-3">
    <label for="unidade_de_medida" class="form-label">Uni de Medida</label>
    <input type="unidade_de_medida" class="form-control" id="unidade_de_medida" placeholder="Kg, L, M " wire:model="unidade_de_medida">
  </div>
    <div class="mb-3">
    <label for="preco_de_custo" class="form-label">Preço de custo</label>
    <input type="preco_de_custo" class="form-control" id="preco_de_custo" placeholder="R$Custo" wire:model="preco_de_custo">
  </div>
    <div class="mb-3">
    <label for="preco_de_venda" class="form-label">Preço de venda</label>
    <input type="preco_de_venda" class="form-control" id="preco_de_venda" placeholder="R$" wire:model="preco_de_venda">
  </div>
    <div class="mb-3">
    <label for="quantidade" class="form-label">Quantidade</label>
    <input type="quantidade" class="form-control" id="quantidade" placeholder="Selecione a quantidade" wire:model="quantidade">
  </div>
    <div class="mb-3">
    <label for="estoque_minimo" class="form-label">Estoque minimo</label>
    <input type="estoque_minimo" class="form-control" id="estoque_minimo" placeholder="Estoque Minimo" wire:model="estoque_minimo">
  </div>
  <button type="submit" class="btn-outline theme-success">Atualizar</button>
</form>
