<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\RoleAdmin;
use Illuminate\Http\Request;

class RoleUserAdminController extends Controller
{
    public function index()
    {
        $roles = RoleAdmin::all();

        return view(app()->getLocale().'.admin.role',[
            'roles' => $roles
        ]);
    }

    function store(Request $request){
        //dd($request);
    }
}
