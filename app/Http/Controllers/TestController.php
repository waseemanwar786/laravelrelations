<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Contact, Post, Category};
class TestController extends Controller
{
    public function index(){
        //$user=User::with(['contact','posts'])->find(1);
        //dd ($user->toArray);
        $categories=Category::all();
        $post = Post::with('categories')->first();
        $post->categories->attach($categories);
        dd($post->toArray());
    }
}
