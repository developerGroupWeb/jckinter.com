<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\UserAdmin;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerAdminController extends Controller
{
    function index(){

        $users = User::latest()->paginate('6');
        return view(app()->getLocale().'.admin.customers-list',[
            'users' => $users
        ]);
    }

    function destroy($language, $id){

        $user = UserAdmin::findOrFail(session()->get('currency_user_admin')['id']);
        if($user->role !== 'admin'){
            return redirect()->route('admin.customer.index', ['language' => app()->getLocale()]);
        }

        $delete = User::destroy($id);
        if($delete)
            return back();
    }
}
