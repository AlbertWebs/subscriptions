<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    // adminHome
    public function index(){
        $Users = User::where('type','0')->get();
        return view('admin.index', compact('Users'));
    }

    public function logout(){
        auth()->guard('admin')->logout(); // Log out an administrator
    }

    public function manual(){
        return view('auth.login-bk');
    }
}
