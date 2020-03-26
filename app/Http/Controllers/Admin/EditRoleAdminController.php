<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditRoleFormRequest;
use App\Models\Admin\RoleAdmin;
use Illuminate\Http\Request;

class EditRoleAdminController extends Controller
{
    function index($language, $id){

        $role = RoleAdmin::findOrFail($id);
        return view(app()->getLocale().'.admin.edit-role-user',[
            'role' => $role
        ]);
    }

    function edit($language, EditRoleFormRequest $request, $id){

        $update = RoleAdmin::whereId($id)->update([
            'name' => $request->name,
            'description' =>$request->description
        ]);
        if($update){
            return redirect()->route('admin.role.edit.index',['language' => app()->getLocale(), 'id' => $id])->with('success', 'Your role has been updated');
        }
    }
}
