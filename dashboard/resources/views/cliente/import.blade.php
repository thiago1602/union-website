@extends('adminlte::page')

@section('content')

<body>
<section style="padding-top: 60px;">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card-header">
                Importar
            </div>
            <div class="card-body">
                <form method="POST"  action="{{ route('cliente.storeImport') }}" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label for="file">Arquivo</label>
                        <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" value="{{old('file')}}">

                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Importar</button>
                        <a href="{{route('cliente.index')}}" class="btn btn-dark">@lang('Voltar')</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
</body>
@endsection
