
@extends('adminlte::page')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                        Clientes
                            </div>
                            <div class="col-12">
                                <div class="float-right">
                        <a href="{{route('cliente.create')}}" class="mr-2"><button class="btn btn-primary" type="submit">Novo</button></a>
                                    <a href="{{route('venda.import')}}"class="mr-3"><button class="btn btn-primary" type="submit">Importar Clientes</button></a>
                                    <a href="{{route('cliente.exportacao', ['extensao' => 'xlsx'])}}" class="mr-3"><button class="btn btn-primary" type="submit">XLSX</button></a>
                        <a href="{{route('cliente.exportacao', ['extensao' => 'csv'])}}" class="mr-3" ><button class="btn btn-primary" type="submit">CSV</button></a>
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
                                <th scope="col">Clientes</th>
                                <th scope="col">Cpf</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>



                            @foreach($cliente as $key => $p)
                            <tr>
                                <th scope="row">{{$p['id']}}</th>
                                <td>{{$p['nome']}}</td>
                                <td>{{$p['cpf']}}</td>
                                <td>{{$p['email']}}</td>
{{--                                <td>{{date ('d/m/Y', strtotime($p['data_cadastro']))}}</td>--}}
                                <td><a href="{{route('cliente.edit', $p['id'])}}">
                                        <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                            <i class="fa fa-lg fa-fw fa-pen"></i>
                                        </button></a>

                                <form id="form_{{$p['id']}}" method="post" action="{{route('cliente.destroy', ['cliente' => $p['id']])}}">
                                      @method('DELETE')
                                @csrf
                                </form>
                                <td><a href="#" onclick="document.getElementById('form_{{$p['id']}}').submit()"> <button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                        </button></a> </td>
                            </tr>

                            @endforeach

                            <script>
  function initFreshChat() {
    window.fcWidget.init({
      token: "5dbb4f05-48cf-4419-92da-646712f8332c",
      host: "https://wchat.freshchat.com"
    });
  }
  function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"Freshdesk Messaging-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
</script>
                            </tbody>
                        </table>

                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="{{$cliente->previousPageUrl()}}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>

                                @for($i = 1; $i <= $cliente->lastPage(); $i++)
                                <li class="page-item {{$cliente->currentPage() == $i ? 'active' : ''}}">
                                    <a class="page-link" href="{{$cliente->url($i)}}">{{$i}}</a>
                                </li>
                                @endfor
                                <li class="page-item">
                                    <a class="page-link" href="{{$cliente->nextPageUrl()}}" aria-label="Next">
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

