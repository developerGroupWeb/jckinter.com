<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerAdminController extends Controller
{
    function index(){

        return view(app()->getLocale().'.admin.customers-list');
    }
}
