<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAdminFormRequest;
use App\Models\Admin\RoleAdmin;
use App\Models\Admin\UserAdmin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserAdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = UserAdmin::latest()->get();

        return view(app()->getLocale().'.admin.users',[
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $roles = RoleAdmin::all();
        return view(app()->getLocale().'.admin.create-user',[
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserAdminFormRequest $request
     * @return void
     */
    public function store(UserAdminFormRequest $request)
    {
        $photo = $request->file('photo');
        $ext   = $photo->extension();
        $name  = time().'.'.$ext;
        $photo = $photo->move('admin/photo', $name)->getFilename();

        $create = UserAdmin::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            "password" => sha1($request->password),
            'photo' =>  "admin/photo/".$photo
        ]);

        if($create){
            return redirect()->route('users.index', ['language' => app()->getLocale()])->with('success', 'A new user has been created');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $language
     * @param int $id
     * @return Response
     */
    public function edit($language, $id)
    {
        $roles = RoleAdmin::all();
        $user  = UserAdmin::findOrFail($id);

       return view(app()->getLocale().'.admin.edit-user',[
           'roles' => $roles,
           'user' => $user
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $language
     * @param UserAdminFormRequest $request
     * @param int $id
     * @return void
     */
    public function update($language, UserAdminFormRequest $request, $id)
    {
        $photo = $request->file('photo');
        $ext   = $photo->extension();
        $name  = time().'.'.$ext;
        $photo = $photo->move('admin/photo', $name)->getFilename();

        $update = UserAdmin::whereId($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            "password" => sha1($request->password),
            'photo' =>  "admin/photo/".$photo
        ]);

        if($update){
            return redirect()->route('users.index', ['language' => app()->getLocale()])->with('update', 'The information user has been updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $language
     * @param int $id
     * @return void
     */
    public function destroy($language,$id)
    {
        $delete = UserAdmin::destroy($id);

        if($delete){
            return redirect()->route('users.index', ['language' => app()->getLocale()])->with('delete', "The user $id has been deleted");
        }
    }
}
