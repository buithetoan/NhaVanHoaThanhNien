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
    public function index()
    {
        return view('home');
    }

    /* --------------------------------------------------------
        Home Page
    --------------------------------------------------------- */
    public function homePage()
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

    /* --------------------------------------------------------
        Để tạm view form login và register 
        ở đây
    --------------------------------------------------------- */
    public function showClientLoginForm()
    {
        return view('client.auth.login');
    }

    public function showClientRegisterForm()
    {
        return view('client.auth.register');
    }
    
}
