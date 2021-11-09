
@extends('adminlte::page')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cadastrar Vendas</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('venda.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Produto</label>
                                <input type="text" class="form-control" name="nome">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Valor</label>
                                <input type="text" class="money form-control" name="valor">
                            </div>

{{--                            <div class="mb-3">--}}
{{--                                <label class="form-label">Data da Venda</label>--}}
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
