<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // one way of inserting DB Table parameters!
        $categories = DB::table('categories')->get();

        // Better way of handling the same request but over our Models!!
        $categories = Category::all();

        $posts = Post::when(request('category_id'), function ($query) {
            $query->where('category_id', request('category_id'));
        })
            ->latest()
            ->get();

        return view('index', compact('posts', 'categories'), [
//              Instead of defining same named variables  we can use the compact() method !
//            'categories' => $allCategories <- renamed into categories so compact works!
//            'posts' => $posts
        ]);
    }
}
