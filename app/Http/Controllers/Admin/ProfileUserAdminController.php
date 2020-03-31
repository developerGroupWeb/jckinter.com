<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileFormRequest;
use App\Http\Requests\ProfilePasswordFormRequest;
use App\Models\Admin\UserAdmin;
use Illuminate\Http\Request;

class ProfileUserAdminController extends Controller
{
    public function index()
    {
        $user = UserAdmin::findOrFail(session()->get('currency_user_admin')['id']);
        return view(app()->getLocale().'.admin.profile',[
            'user' => $user
        ]);
    }


    function update(ProfileFormRequest $request){

        $photo = $request->file('photo');

       if($photo != null){

           $ext   = $photo->extension();
           $name  = time().'.'.$ext;
           $path_photo = "admin/photo/".$photo->move('admin/photo', $name)->getFilename();
       }else{
           $path_photo = session()->get('currency_user_admin')['photo'];
       }


        $update = UserAdmin::whereId(session()->get('currency_user_admin')['id'])->update([
            'name' => $request->name,
            'email' => $request->email,
            'photo' =>  $path_photo,
        ]);


        if($update){

            session()->put('currency_user_admin', [
                'id'         => session()->get('currency_user_admin')['id'],
                'email'      => $request->email,
                'name'       => $request->name,
                'role'       => session()->get('currency_user_admin')['role'],
                'photo'      => $path_photo
            ]);

            return redirect()->route('admin.index', ['language' => app()->getLocale()])->with('success', 'Profile has been updated');
        }

    }

    function update_password(ProfilePasswordFormRequest $request){
        $old_password  = UserAdmin::findOrFail(session()->get('currency_user_admin')['id'])->password;

        if($old_password !== sha1($request->get('old_password'))){

            return back()->with('error_old_password', 'Your old password is incorrect');
        }

        $update = UserAdmin::whereId(session()->get('currency_user_admin')['id'])->update([
            'password' => $request->password
        ]);

        if($update)
            return redirect()->route('admin.index', ['language' => app()->getLocale()])->with('success', 'Profile has been updated');
    }
}
