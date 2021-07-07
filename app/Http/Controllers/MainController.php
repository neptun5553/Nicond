<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function blog(){
        return view('blog');
    }
    public function blog_add(Request $request){
        //dd($request);
        $valid = $request->validate([
            'title' => 'required|min:4|max:100',
            'description' => 'required|min:15|max:500',
        ]);
        //return view('blog');
    }
    public function category(){
        return view('category');
    }
    public function auth(){
        return view('auth');
    }
}
