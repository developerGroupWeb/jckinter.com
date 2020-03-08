@component('mail::message')
# Bonjour

Vous avez redu un message de {{ $data->name }}

Message

{{ $data->message }}

@component('mail::button', ['url' => route('home.index')])
Home
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
