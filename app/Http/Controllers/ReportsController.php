<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function view()
    {
        $id = $_GET['id'];
        $mode = !empty($_GET['mode']) ? $_GET['mode'] : null;
        $report = DB::table("reports")->where('id', $id)->first();

        return view("view", compact('mode', 'report'));
    }

    public function delete()
    {
        $id = $_GET['id'];
        DB::table("reports")->where('id', $id)->delete();
        return redirect("/reports");
    }
}
