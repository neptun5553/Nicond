<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function blog(){
        $news = new Blog();

        return view('blog', ['news' => $news -> all()]);
    }
    public function blog_add(Request $request){
        //dd($request);
        $valid = $request->validate([
            'title' => 'required|min:4|max:100',
            'descriptions' => 'required|min:15|max:500',
        ]);
        //return view('blog');
        $news = new Blog();
        $news -> title = $request->input('title');
        $news -> descriptions = $request->input('descriptions');
        $news -> save();

        return redirect()->route('blog');


    }
    public function category(){
        return view('category');
    }
    public function auth(){
        return view('auth');
    }
}
