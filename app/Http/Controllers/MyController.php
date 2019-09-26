<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function GetChao($user)
    {
        return view('hello-user', compact('user'));
    }    

    public function GetLogin()
    {
        return view('login');
    }

    public function PostLogin(Request $request)
    {
        if($request->taikhoan=='laravel' && $request->matkhau=='123')
        {
            $s = 0;
            for($i=1; $i<=5; $i++){
                $s += $i;
            }
            echo $s;
        }
        else{
            echo $request->taikhoan . '<br>';
            echo $request->matkhau;
        }
    }
}