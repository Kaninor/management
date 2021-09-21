<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DateTime;

class QueryController extends Controller
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
            return view('addEdit', compact('isEdit'));
        }
    }

    public function edit()
    {
        $isEdit = true;
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        $id = base64_decode(base64_decode(base64_decode($id)));
        if ($id != null) {
            $query = DB::table('products')->where('id', $id)->first();
            return view('addEdit', compact('isEdit', 'query'));
        }

        return redirect("/add");
    }

    public function delete()
    {
        $id = $_GET['id'];
        $id = base64_decode(base64_decode(base64_decode($id)));
        DB::table('products')->where('id', $id)->delete();

        return redirect('/');
    }
}
