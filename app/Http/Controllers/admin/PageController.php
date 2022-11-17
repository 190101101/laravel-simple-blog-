<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\admin\Page;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page'] = Page::orderBy('id', 'DESC')->paginate(10);
        return view('admin.page.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
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
            'page_title' => 'bail|required|min:3|max:50',
            'page_content' => 'bail|required|min:3|max:1000',
        ]);

        $page = Page::where('page_title', Str::slug($request->page_title, '-'))->first();

        if($page){
            return back()->with('warning', 'this title already exists');
        }

        return Page::create([
            'page_title' => $request->page_title,
            'page_slug' => Str::slug($request->page_title, '-'),
            'page_content' => $request->page_content,
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
        $page = Page::where('id', $id)->first();
        return $page 
            ? view('admin.page.update', compact('page'))
            : redirect('/admin/page')->with('error', 'page not found');
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
            'page_title' => 'bail|required|min:3|max:50',
            'page_content' => 'bail|required|min:3|max:1000',
        ]);

        $page = Page::where('page_title', Str::slug($request->page_title, '-'))
        ->where('id', '!=', $id)->first();
        
        if($page){
            return back()->with('warning', 'this title already exists');
        }

        return Page::where('id', $id)->update([
            'page_title' => $request->page_title,
            'page_slug' => Str::slug($request->page_title, '-'),
            'page_content' => $request->page_content,
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
        Page::find($id)->delete();
        return back()->with('success', 'successfully deleted');
    }
}
