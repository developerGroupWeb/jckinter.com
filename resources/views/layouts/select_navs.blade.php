@if((!isset(session()->get('currency_user')['email']) || !isset(session()->get('currency_user')['password'])) && (request()->path() === app()->getLocale().'/login' || request()->path() === app()->getLocale().'/register' || request()->path() === app()->getLocale().'/forgot-password' || $title === 'reset password'))

@elseif(in_array('jckinter-admin', explode('/', request()->path())))
    @include('layouts.admin-sidebar')
@elseif((!isset(session()->get('currency_user')['email']) || !isset(session()->get('currency_user')['password'])))
    @include('layouts.nav')
@elseif(request()->path() === app()->getLocale().'/dashboard')

@else
    @include('layouts.navUser')
@endif
