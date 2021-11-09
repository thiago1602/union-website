
@extends('adminlte::page')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cadastrar Clientes</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('cliente.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">CPF</label>
                                <input type="text" class="form-control" name="cpf">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
{{--                            <div class="mb-3">--}}
{{--                                <label class="form-label">Data do Cadastro</label>--}}
{{--                                <input type="date" class="form-control" name="data_cadastro">--}}
{{--                            </div>--}}

                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
