<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home()
    {
        $info = [
            "firstName" => "Dariush",
            "lastName" => "Rouhifard",
            "age" => 16
        ];

        return view('welcome', compact('info'));
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
}
