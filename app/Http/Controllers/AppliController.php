<?php

namespace App\Http\Controllers;

class AppliController extends Controller
{
    public function add()
    {
        return view('admin/appli/add');
    }

    public function analytics()
    {
        return view('admin/appli/analytics');
    }

    public function capture()
    {
        return view('admin/appli/capture');
    }

    public function edit()
    {
        return view('admin/appli/edit');
    }

    public function folder()
    {
        return view('admin/appli/folder');
    }

    public function index()
    {
        return view('admin/appli/index');
    }

    public function list()
    {
        return view('admin/appli/list');
    }

    public function setting()
    {
        return view('admin/appli/setting');
    }

    public function make()
    {
        return view('admin/appli/make');
    }

    public function template()
    {
        return view('admin/appli/template');
    }
}
