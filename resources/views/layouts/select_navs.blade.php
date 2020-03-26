
@if((!isset(session()->get('currency_user')['email']) || !isset(session()->get('currency_user')['password'])) && (request()->path() === app()->getLocale().'/login' || request()->path() === app()->getLocale().'/register' || request()->path() === app()->getLocale().'/forgot-password' || $title === 'reset password'))

@elseif(in_array(request()->path(), [app()->getLocale().'/jckinter-admin', app()->getLocale().'/jckinter-admin/create-role-user', app()->getLocale().'/jckinter-admin/create-user', app()->getLocale().'/jckinter-admin/edit-user', app()->getLocale().'/jckinter-admin/profile-user', app()->getLocale().'/jckinter-admin/role-user', app()->getLocale().'/jckinter-admin/users',
app()->getLocale().'/jckinter-admin/order-list', app()->getLocale().'/jckinter-admin/edit-role-user/'.(isset($role->id) ? $role->id : '')]))
    @include('layouts.admin-sidebar');
@elseif((!isset(session()->get('currency_user')['email']) || !isset(session()->get('currency_user')['password'])))
    @include('layouts.nav');
@elseif(request()->path() === app()->getLocale().'/dashboard')

@else
    @include('layouts.navUser');
@endif
