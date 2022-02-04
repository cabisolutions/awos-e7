<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Images;
use App\Article;
use App\Articulo;
use App\Categoria;
use App\Imagen;

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
         $users = User::count();
         $categorias= Categoria::count();
        //  $imagenes = Imagen::count();
         $articulos = Articulo::count();
    
        return view('dashboard', [
            'users' => $users,
            'categorias' => $categorias,
            // 'imagenes' => $imagenes,
            'articulos' => $articulos

        ]);

        // return view('dashboard');
    }
}
