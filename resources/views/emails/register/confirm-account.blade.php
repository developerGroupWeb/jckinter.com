@component('mail::message')
# Confirm your account

Click on the button to confirm your account

@component('mail::button', ['url' => route('register.confirm', ['language' => app()->getLocale(),'id_confirmation' => $user->id_confirmation])])
Confirm your account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
