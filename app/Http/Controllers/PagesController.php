<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home()
    {
        return redirect("/dashboard");
    }

    public function admin()
    {
        $admins = DB::table("admin")->get();

        return view('mainPages.admin', compact('admins'));
    }

    public function dumpdata()
    {
        $employees = DB::table("employee")->get();

        dd($employees);
    }

    public function dashboard()
    {
        $user = DB::table('admin')->where('id', 1)->first();
        $products = DB::table('products')->get();

        return view('mainPages.dashboard', compact('user', 'products'));
    }

    public function settings()
    {
        return view('mainPages.settings');
    }

    public function reports()
    {
        $reports = DB::table("reports")->get();

        return view('mainPages.reports', compact('reports'));
    }

    public function about()
    {
        return view('mainPages.about');
    }
}
