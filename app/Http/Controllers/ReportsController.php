<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReportsController extends Controller
{
    public function add(Request $req)
    {
        $solds = $req->solds;
        $boughts = $req->boughts;
        $sale = $req->sale;
        $buy = $req->buy;
        $profit = $req->profit;
        $loss = $req->loss;

        DB::table('reports')->insert(['solds' => $solds, 'boughts' => $boughts, 'sale' => $sale, 'buy' => $buy, 'profit' => $profit, 'loss' => $loss, 'created_at' => new DateTime]);
    }

    public function view()
    {
        $id = $_GET['id'];
        $mode = !empty($_GET['mode']) ? $_GET['mode'] : null;
        $report = DB::table("reports")->where('id', $id)->first();

        return view("reportsViews.view", compact('mode', 'report'));
    }

    public function delete()
    {
        $id = $_GET['id'];
        DB::table("reports")->where('id', $id)->delete();
        return redirect("/reports");
    }
}
