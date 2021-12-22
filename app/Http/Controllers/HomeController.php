<?php
namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Display the home page.
     */
    public function index()
    {
        $categories = Category::orderBy('display_order')->get();

        return view('home', [
            'categories' => $categories
        ]);
    }
}
