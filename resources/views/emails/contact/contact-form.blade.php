@component('mail::message')
# Hello,

You received a message from  {{ $data->name.' '.$data->surname }}

<h3>Content</h3>
{{ $data->message }}



Thanks,<br>
{{ $data->name }}
@endcomponent
