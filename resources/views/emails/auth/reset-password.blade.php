@component('mail::message')
# Reset password

Click in the button for change your password

@component('mail::button', ['url' => route('reset.password.index', ['language' => app()->getLocale(),'id_confirmation' => $user->id_confirmation])])
Reset your password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
