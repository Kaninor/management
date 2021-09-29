<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function view()
    {
        $mode = !empty($_GET['mode']) ? $_GET['mode'] : null;

        return view("view", compact('mode'));
    }

    public function delete()
    {
        return "Delete Report";
    }
}
