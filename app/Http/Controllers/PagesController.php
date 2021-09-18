<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home()
    {
        return redirect("/profile");
    }

    public function admin()
    {
        $admins = DB::table("admin")->get();

        return view('admin', compact('admins'));
    }

    public function dumpdata()
    {
        $employees = DB::table("employee")->get();

        dd($employees);
    }

    public function profile()
    {
        $user = DB::table('admin')->where('id', 1)->first();

        return view('profile', compact('user'));
    }

    public function settings()
    {
        return view('settings');
    }

    public function reports()
    {
        return view('reports');
    }

    public function about()
    {
        return view('about');
    }

    public function add()
    {
        return view('add');
    }

    public function edit()
    {
        return view('edit');
    }

    public function delete()
    {
        return view('delete');
    }
}
