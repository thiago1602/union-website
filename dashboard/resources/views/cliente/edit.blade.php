
@extends('adminlte::page')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Atualizar Cliente</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" value="{{$cliente->nome}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">CPF</label>
                                <input type="text" class="form-control" name="cpf" value="{{$cliente->cpf}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$cliente->email}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
