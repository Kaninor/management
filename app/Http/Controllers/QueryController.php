<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QueryController extends Controller
{
    public function add()
    {
        $mode = "Add";
        return view('addEdit', compact('mode'));
    }

    public function edit()
    {
        $mode = "Edit";
        return view('addEdit', compact('mode'));
    }

    public function delete()
    {
        return view('delete');
    }
}
