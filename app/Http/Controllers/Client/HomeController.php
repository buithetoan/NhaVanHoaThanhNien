<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use App\Repositories\Active\ActiveInterface;
use App\Repositories\Child\ChildInterface;
use App\Repositories\ClassChild\ClassChildInterface;
use App\Repositories\ClassRoom\ClassRoomInterface;
use App\Repositories\Course\CourseInterface;
use App\Repositories\ParentUser\ParentUserInterface;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $activeRepository;
    protected $courseRepository;
    protected $userRepository;
    protected $parentUserRepository;
    protected $childRepository;
    protected $classChildRepository;
    protected $roomRepository;
    public function __construct(ActiveInterface $activeRepos,CourseInterface $courseRepos,
        ParentUserInterface $parentUserRepos,UserInterface $userRepos,
        ChildInterface $childRepos,ClassRoomInterface $roomRepos,ClassChildInterface $classChildRepos
    )
    {
        $this->activeRepository = $activeRepos;
        $this->courseRepository = $courseRepos;
        $this->parentUserRepository= $parentUserRepos;
        $this->userRepository = $userRepos;
        $this->childRepository= $childRepos;
        $this->classChildRepository=$classChildRepos;
        $this->roomRepository= $roomRepos;
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
    /* --------------------------------------------------------
           Profile Page
       --------------------------------------------------------- */
    public function profilePage()
    {
        if (Auth::check()){
            $parentUser = $this->parentUserRepository->getParentUserByUserId(Auth::user()->id);
            $childs = $this->childRepository->getChildByParentId($parentUser->id);
            $classChilds = $this->classChildRepository->getAll();
            $rooms = $this->roomRepository->getAll();
            $courses = $this->courseRepository->getAll();
            return view('client.profile.profile',compact('parentUser','childs','classChilds','rooms','courses'));
        }
        return view('client.home.home');
    }
}
