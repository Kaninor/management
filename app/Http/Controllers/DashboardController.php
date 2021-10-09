<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DateTime;

class DashboardController extends Controller
{
    public function add()
    {
        $isEdit = false;
        return view("dashboardViews.addEdit", compact('isEdit'));
    }

    public function addproduct(Request $req)
    {
        $email = $req->email;
        $password = $req->password;
        $p_name = $req->p_name;
        $p_price = $req->p_price;
        $p_num = $req->p_num;

        if (DB::table('products')->insert(['p_name' => $p_name, 'price' => $p_price, 'num_o_p' => $p_num, 'created_at' => new DateTime])) {
            return redirect("/");
        }
    }

    public function edit()
    {
        $isEdit = true;
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        $id = base64_decode(base64_decode(base64_decode($id)));
        $query = DB::table('products')->where('id', $id)->first();

        return view('dashboardViews.addEdit', compact('isEdit', 'query'));
    }

    public function delete(Request $req)
    {
        $id = $req->id;
        DB::table('products')->where('id', $id)->delete();
    }

    public function editproduct(Request $req)
    {
        $id = $req->id;

        $email = $req->email;
        $password = $req->password;
        $p_name = $req->p_name;
        $p_price = $req->p_price;
        $p_num = $req->p_num;

        if (DB::table('products')->where('id', $id)->update(['p_name' => $p_name, 'price' => $p_price, 'num_o_p' => $p_num, 'updated_at' => new DateTime]))
            return redirect('/');
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $num = $req->num;

        DB::table('products')->where('id', $id)->update(["num_o_p" => $num, "updated_at" => new DateTime]);
        return redirect("/");
    }

    public function info()
    {
        $id = $_GET['id'];

        $product = DB::table('products')->where('id', $id)->first(["p_name", "price", "num_o_p", "created_at", "updated_at"]);
        dd($product);
    }
}
