<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\main\Page;

class PageController extends Controller
{
    public function page($slug)
    {
        $page = Page::where('page_slug', $slug)->first();

        if(!$page){
            return redirect('/')->with('error', 'oops');
        }
        return view('main.page.page', compact('page'));
    }

    public function pages()
    {
        $data['page'] = Page::orderBy('id', 'DESC')->paginate(8);
        return view('main.page.pages', compact('data'));
    }
}
