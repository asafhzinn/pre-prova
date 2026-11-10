<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>descricao</th>
                <th>marca</th>
                <th>categoria_id</th>
                <th>unidade_de_medida</th>
                <th>preco_de_custo</th>
                <th>preco_de_venda</th>
                <th>quantidade</th>
                <th>estoque_minimo</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->marca }}</td>
                    <td>{{ $produto->categoria_id }}</td>
                    <td>{{ $produto->unidade_de_medida }}</td>
                    <td>{{ $produto->preco_de_custo }}</td>
                    <td>{{ $produto->preco_de_venda }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->estoque_minimo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
