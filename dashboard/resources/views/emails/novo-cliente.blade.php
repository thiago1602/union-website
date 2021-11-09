@component('mail::message')
# {{$cliente}}}

Data de cadastro {{$data_cadastro}}

@component('mail::button', ['url' => $url])
Clique aqui para ver o cliente
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent
