<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Images;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // $users = User::count();
        // $categoryes = Category::count();
        // $images = Images::count();
        // $articles = Article::count();
    
        // return view('index', [
        //     'users' => $users,
        //     'categoryes' => $categoryes,
        //     'images' => $images,
        //     'articles' => $articles

        // ]);

        return view('dashboard');
    }
}
