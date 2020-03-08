@component('mail::message')
# Confirm your account

Click on the button to confirm your account

@component('mail::button', route('login.index'))
Confirm your account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
