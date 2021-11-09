@component('mail::message')
# Introdução

O corpo da mensagem.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
