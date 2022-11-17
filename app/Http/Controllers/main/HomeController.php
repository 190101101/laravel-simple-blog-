<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\main\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $data['blog'] = Blog::orderBy('id', 'desc')->paginate(9);
        return view('main.home.index', compact('data'));
    }

    public function login()
    {
        return view('main.home.login');
    }

    public function signIn(Request $request)
    {
        $request->flash();

        $data = $request->only('email', 'password');
        $remember = $request->has('remember') ? true : false;

        if(Auth::attempt($data, $remember)){
            return redirect()->intended('admin/panel');
        }else{
            return back()->with('error', 'error user');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'already everything?');
    }
}
