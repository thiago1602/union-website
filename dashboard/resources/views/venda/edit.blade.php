
@extends('adminlte::page')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Atualizar Venda</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('venda.update', ['venda' => $venda->id]) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" value="{{$venda->nome}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Valor</label>
                                <input type="text" class=" money form-control" name="valor" value="{{$venda->valor}}">
                            </div>

{{--                            <div class="mb-3">--}}
{{--                                <label class="form-label">Data do Cadastro</label>--}}
{{--                                <input type="date" class="form-control" name="data_cadastro" value="{{$venda->data_cadastro}}">--}}
{{--                            </div>--}}

                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
