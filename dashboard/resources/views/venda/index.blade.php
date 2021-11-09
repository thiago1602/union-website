

@extends('adminlte::page')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                Vendas
                            </div>
                            <div class="col-12">
                                <div class="float-right">
                                    <a href="{{route('venda.create')}}" class="mr-2"><button class="btn btn-primary" type="submit">Novo</button></a>
                                    <a href="{{route('venda.import')}}"class="mr-2"><button class="btn btn-primary" type="submit">Importar Vendas</button></a>
                                    <a href="{{route('venda.report', ['extensao' => 'xlsx'])}}" class="mr-2"><button class="btn btn-primary" type="submit">XLSX</button></a>
                                <a href="{{route('venda.report', ['extensao' => 'csv'])}}" class="mr-2"><button class="btn btn-primary" type="submit">CSV</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Data da Venda</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($venda as $key => $c)
                        <tr>
                            <th scope="row">{{$c['id']}}</th>
                            <td>{{$c['nome']}}</td>
                            <td>{{$c['valor']}}</td>
                            <td>{{date ('d/m/Y', strtotime($c['created_at']))}}</td>
                            <td><a href="{{route('venda.edit', $c['id'])}}"><button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                        <i class="fa fa-lg fa-fw fa-pen"></i>
                                    </button></a>
                                <form id="form_{{$c['id']}}" method="post" action="{{route('venda.destroy', ['venda' => $c['id']])}}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            <td><a href="#" onclick="document.getElementById('form_{{$c['id']}}').submit()"><button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button></a> </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>

                <nav>
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="{{$venda->previousPageUrl()}}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        @for($i = 1; $i <= $venda->lastPage(); $i++)
                            <li class="page-item {{$venda->currentPage() == $i ? 'active' : ''}}">
                                <a class="page-link" href="{{$venda->url($i)}}">{{$i}}</a>
                            </li>
                        @endfor
                        <li class="page-item">
                            <a class="page-link" href="{{$venda->nextPageUrl()}}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>
@endsection
