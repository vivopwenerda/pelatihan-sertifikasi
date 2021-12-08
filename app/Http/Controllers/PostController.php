<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Porto;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        
        return view('portofolio', [
            "title" => "All Portofolio" . $title,
            "active" => 'portofolio',
            "portofolio" => Porto::latest()->filter(request(['search', 'category', 'author']))->get()
        ]);
    }

    public function show(Porto $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'portofolio',
            "post" => $post
        ]);
    }
}
