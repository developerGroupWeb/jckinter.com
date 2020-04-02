<?php

namespace App\Policies;

use App\Models\Admin\UserAdmin;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    function create(UserAdmin $userAdmin){
        return $userAdmin->role = 'admin';
    }

    function create_role(UserAdmin $userAdmin){
        return $userAdmin->role = 'developer';
    }

    function edit(UserAdmin $userAdmin){
        return $userAdmin->role = 'admin';
    }

    function delete(UserAdmin $userAdmin){
        return $userAdmin->role = 'admin';
    }


    function before(UserAdmin $userAdmin){
        return $userAdmin->role == 'admin' ?? null;
    }
}
