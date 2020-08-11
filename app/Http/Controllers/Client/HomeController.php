<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /* --------------------------------------------------------
        Home Page
    --------------------------------------------------------- */
    public function index()
    {
        return view('client.home.home');
    }

    /* --------------------------------------------------------
        Active Page
    --------------------------------------------------------- */
    public function activePage()
    {
        return view('client.active.active');
    }

    /* --------------------------------------------------------
        Course Page
    --------------------------------------------------------- */
    public function coursePage()
    {
        return view('client.course.course');
    }

    /* --------------------------------------------------------
        Blog Page
    --------------------------------------------------------- */
    public function blogPage()
    {
        return view('client.blog.blog');
    }
}
