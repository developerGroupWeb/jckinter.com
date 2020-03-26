<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRoleFormRequest;
use App\Models\Admin\RoleAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateRoleUserAdminController extends Controller
{
    public function index()
    {
        return view(app()->getLocale().'.admin.create-role');
    }

    function store(CreateRoleFormRequest $request){

        $create = RoleAdmin::create($request->all());
        if($create){
            return redirect()->route('admin.user.create.role.index', app()->getLocale())->with('success', 'Your role has been created');
        }
    }
}
