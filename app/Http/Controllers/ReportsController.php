<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function print()
    {
        $row = $_GET['row'];

        return view("print", compact('row'));
    }

    public function view()
    {
        return "View";
    }

    public function delete()
    {
        return "Delete Report";
    }
}
