<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateRoleUserAdminController extends Controller
{
    public function index()
    {
        return view(app()->getLocale().'.admin.create-role');
    }
}
