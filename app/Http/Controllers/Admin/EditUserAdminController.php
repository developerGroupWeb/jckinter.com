<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditUserAdminController extends Controller
{
    public function index()
    {
        return view(app()->getLocale().'.admin.edit-user');
    }
}
