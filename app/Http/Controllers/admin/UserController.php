<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = User::orderBy('id', 'DESC')->paginate(10);
        return view('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|min:3|max:20',
            'email' => 'bail|required|min:5|max:30',
            'password' => 'bail|required|min:3|max:20',
            'type' => 'bail|required',
        ]);

        $user = User::where('email', $request->email)->first();

        if($user){
            return back()->with('warning', 'this title already exists');
        }

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type,
        ])
        ? back()->with('success', 'successfully updated')
        : back()->with('error', 'something wrong');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return $user 
            ? view('admin.user.update', compact('user'))
            : redirect('/admin/user')->with('error', 'user not found');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'bail|required|min:3|max:20',
            'email' => 'bail|required|min:5|max:30',
            'password' => 'bail|required|min:3|max:20',
            'type' => 'bail|required',
        ]);

        $user = User::where('email', $request->email)->where('id', '!=', $id)->first();
        
        if($user){
            return back()->with('warning', 'this email already exists');
        }

        return User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'type' => $request->type,
        ]) 
        ? back()->with('success', 'successfully updated')
        : back()->with('error', 'something wrong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return back()->with('success', 'successfully deleted');
    }
}
