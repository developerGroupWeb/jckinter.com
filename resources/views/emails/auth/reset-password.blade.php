@component('mail::message')
# Reset password

Click in the button for change your password

@component('mail::button', route('reset.password.index', ['id_confirmation' => $user->id_confirmation]))
Reset your password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
