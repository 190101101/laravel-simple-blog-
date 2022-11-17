<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\admin\blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog'] = Blog::orderBy('id', 'DESC')->paginate(10);
        return view('admin.blog.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
            'blog_title' => 'bail|required|min:3|max:50',
            'blog_content' => 'bail|required|min:3|max:1000',
        ]);

        $blog = Blog::where('blog_title', Str::slug($request->blog_title, '-'))->first();

        if($blog){
            return back()->with('warning', 'this title already exists');
        }

        return Blog::create([
            'blog_title' => $request->blog_title,
            'blog_slug' => Str::slug($request->blog_title, '-'),
            'blog_content' => $request->blog_content,
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
        $blog = Blog::where('id', $id)->first();
        return $blog 
            ? view('admin.blog.update', compact('blog'))
            : redirect('/admin/blog')->with('error', 'blog not found');
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
            'blog_title' => 'bail|required|min:3|max:50',
            'blog_content' => 'bail|required|min:3|max:1000',
        ]);

        $blog = Blog::where('blog_title', Str::slug($request->blog_title, '-'))
        ->where('id', '!=', $id)->first();
        
        if($blog){
            return back()->with('warning', 'this title already exists');
        }

        return Blog::where('id', $id)->update([
            'blog_title' => $request->blog_title,
            'blog_slug' => Str::slug($request->blog_title, '-'),
            'blog_content' => $request->blog_content,
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
        Blog::find($id)->delete();
        return back()->with('success', 'successfully deleted');
    }
}
