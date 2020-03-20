
@if((!isset(session()->get('currency_user')['email']) || !isset(session()->get('currency_user')['password'])) && (request()->path() === 'en/login' || request()->path() === 'en/register' || request()->path() === 'en/forgot-password' || $title === 'reset password'))

@elseif((!isset(session()->get('currency_user')['email']) || !isset(session()->get('currency_user')['password'])))
    @include('layouts.nav');
@elseif(request()->path() === 'en/dashboard')

@else
    @include('layouts.navUser');
@endif
