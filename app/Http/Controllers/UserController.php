<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function list()
    {
        return view('admin/user/list');
    }

    public function regist()
    {
        return view('admin/user/regist');
    }
}
