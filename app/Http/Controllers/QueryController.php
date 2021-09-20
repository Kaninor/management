<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function add()
    {
        $isEdit = false;
        return view('addEdit', compact('isEdit'));
    }

    public function edit()
    {
        $isEdit = true;
        $query = DB::table('products')->where('id', 22)->first();

        return view('addEdit', compact('isEdit', 'query'));
    }

    public function delete()
    {
        return view('delete');
    }
}
