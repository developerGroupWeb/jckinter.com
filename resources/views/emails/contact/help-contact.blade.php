@component('mail::message')
# Subject
{{ $data->subject }}

Message<br/>

 <strong>{{ $data->message }}</strong>


Thanks,<br>
{{ $user->full_name }}
@endcomponent
