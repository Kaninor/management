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
        $products = DB::table('products')->orderBy('id', 'DESC')->get();

        $solds = DB::table("solds")->get("sale");
        $boughts = DB::table("boughts")->get("buy");
        $soldsCount = DB::table("solds")->count();
        $boughtsCount = DB::table("boughts")->count();

        $totalSoldsPrice = 0;
        $totalBoughtsPrice = 0;

        foreach ($solds as $sold) {
            $totalSoldsPrice += $sold->sale;
        }

        foreach ($boughts as $bought) {
            $totalBoughtsPrice += $bought->buy;
        }

        $total = $totalSoldsPrice + $totalBoughtsPrice;

        $profit = $totalSoldsPrice * 100 / $total;
        $loss = $totalBoughtsPrice * 100 / $total;

        $data = [$soldsCount, $boughtsCount, $totalSoldsPrice, $totalBoughtsPrice, $profit, $loss];

        return view('mainPages.dashboard', compact('user', 'products', 'data'));
    }

    public function settings()
    {
        return view('mainPages.settings');
    }

    public function reports()
    {
        $reports = DB::table("reports")->orderBy('id', 'DESC')->get();

        return view('mainPages.reports', compact('reports'));
    }

    public function about()
    {
        return view('mainPages.about');
    }
}
