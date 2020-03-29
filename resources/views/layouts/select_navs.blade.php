@if((!(session()->has('currency_user'))) && (in_array(request()->path(), [app()->getLocale().'/login',app()->getLocale().'/admin/login', app()->getLocale().'/register', app()->getLocale().'/forgot-password']) || $title === 'reset password'))

@elseif(in_array('jckinter-admin', explode('/', request()->path())))
    @include('layouts.admin-sidebar')
@elseif((!session()->has('currency_user')))
    @include('layouts.nav')
@elseif(request()->path() === app()->getLocale().'/dashboard')

@else
    @include('layouts.navUser')
@endif
