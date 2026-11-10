<div class="container py-5 ">
    <div class="row justify-content-center ">
        <div class="col-md-5">

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form wire:submit="entrar">

                <div class="mb-3">
                    <label class="form-label">E-mail</label>

                    <input
                        type="email"
                        class="form-control"
                        wire:model="email"
                    >

                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nome</label>

                    <input
                        type="Nome"
                        class="form-control"
                        wire:model="Nome"
                    >

                    @error('CPF')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Telefone</label>

                    <input
                        type="telefone"
                        class="form-control"
                        wire:model="telefone"
                    >

                    @error('telefone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Endereço</label>

                    <input
                        type="endereco"
                        class="form-control"
                        wire:model="endereco"
                    >

                    @error('endereco')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                
                <div class="mb-3">
                    <label class="form-label">CPF</label>

                    <input
                        type="CPF"
                        class="form-control"
                        wire:model="CPF"
                    >

                    @error('CPF')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button class="btn btn-primary w-100" type="submit">
                    Entrar
                </button>

            </form>
        </div>
    </div>
</div>
