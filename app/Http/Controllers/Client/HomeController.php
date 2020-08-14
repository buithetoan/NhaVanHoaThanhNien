<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use App\Repositories\Active\ActiveInterface;
use App\Repositories\Course\CourseInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $activeRepository;
    protected $courseRepository;
    public function __construct(ActiveInterface $activeRepos,CourseInterface $courseRepos)
    {
        $this->activeRepository = $activeRepos;
        $this->courseRepository = $courseRepos;
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
        $activities = $this->activeRepository->getAll();
        return view('client.home.home',compact('activities'));
    }

}
