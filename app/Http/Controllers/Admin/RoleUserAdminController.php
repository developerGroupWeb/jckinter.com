<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleUserAdminController extends Controller
{
    public function index()
    {
        return view(app()->getLocale().'.admin.role');
    }
}
