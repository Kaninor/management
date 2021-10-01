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

        $email = !empty($_GET['email']) ? $_GET['email'] : null;
        $password = !empty($_GET['password']) ? $_GET['password'] : null;
        $p_name = !empty($_GET['p_name']) ? $_GET['p_name'] : null;
        $p_price = !empty($_GET['p_price']) ? $_GET['p_price'] : null;
        $p_num = !empty($_GET['p_num']) ? $_GET['p_num'] : null;

        if ($email !== null && $password !== null && $p_name !== null && $p_price !== null && $p_num !== null) {
            DB::table('products')->insert(['p_name' => $p_name, 'price' => $p_price, 'num_o_p' => $p_num, 'created_at' => new DateTime]);
            return redirect("/");
        } else {
            return view('dashboardViews.addEdit', compact('isEdit'));
        }
    }

    public function edit()
    {
        $isEdit = true;
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        $id = base64_decode(base64_decode(base64_decode($id)));
        $e = !empty($_GET['e']) ? $_GET['e'] : null;
        $query = DB::table('products')->where('id', $id)->first();

        if ($id != null && $e == 1) {
            return redirect("/editproduct?id=" . $id . "&p_name=" . $query->p_name . "&p_price=" . $query->price . "&p_num=" . $query->num_o_p);
        }

        if ($id != null && $e == null) {
            $query = DB::table('products')->where('id', $id)->first();
            return view('dashboardViews.addEdit', compact('isEdit', 'query'));
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $id = base64_decode(base64_decode(base64_decode($id)));
        DB::table('products')->where('id', $id)->delete();

        return redirect('/');
    }

    public function editproduct()
    {
        $id = $_GET['id'];

        $email = !empty($_GET['email']) ? $_GET['email'] : null;
        $password = !empty($_GET['password']) ? $_GET['password'] : null;
        $p_name = $_GET['p_name'];
        $p_price = $_GET['p_price'];
        $p_num = $_GET['p_num'];

        if (DB::table('products')->where('id', $id)->update(['p_name' => $p_name, 'price' => $p_price, 'num_o_p' => $p_num, 'updated_at' => new DateTime]))
            return redirect('/');
    }

    public function update()
    {
        $id = $_GET['id'];
        $num = $_GET['num'];

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
