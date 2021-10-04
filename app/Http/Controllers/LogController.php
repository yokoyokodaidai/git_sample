<?php

namespace App\Http\Controllers;

class LogController extends Controller
{
    public function appli()
    {
        return view('admin/log/appli');
    }

    public function user()
    {
        return view('admin/log/user');
    }

    public function appli_user()
    {
        return view('admin/log/appli_user');
    }

    public function user_appli()
    {
        return view('admin/log/user_appli');
    }
}
