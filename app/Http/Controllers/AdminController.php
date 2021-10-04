<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    { }

    public function index()
    {
        \Log::debug(Auth::user());
        return view('admin/index');
    }
}
