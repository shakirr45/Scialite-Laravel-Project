<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){

                return view('user.user-index');

            }elseif($usertype == 'admin'){
                return view('admin.admin-index');
            }else{
                return redirect()->back();
            }
        }
    }

    public function check(){
        return view('admin.check');

    }

}
