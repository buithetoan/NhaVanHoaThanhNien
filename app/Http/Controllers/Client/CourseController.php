<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ParentUser;
use App\Repositories\Course\CourseInterface;
use App\Repositories\ParentUser\ParentUserInterface;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    protected $courseRepository;
    protected $parentUserRepository;
    protected $userRepository;
    public function __construct(CourseInterface $courseRepos,ParentUserInterface $parentUserRepos, UserInterface $userRepos)
    {
        $this->courseRepository = $courseRepos;
        $this->parentUserRepository = $parentUserRepos;
        $this->userRepository = $userRepos;
    }
    public function index()
    {
        $courses = $this->courseRepository->getAll();
        return view('client.course.course',compact('courses'));
    }
    public function courseDetailPage(Request $request)
    {
        if ($request->course_id){
            $course = $this->courseRepository->find($request->course_id);
            return view('client.course.course-detail',compact('course'));
        }
        return back()->with('err','Đã xảy ra lỗi!');
    }
    public function meetPage()
    {
        $parent = new  ParentUser();
        if(Auth::check()){
            $user = $this->userRepository->find(Auth::user()->id);
            $parent = $this->parentUserRepository->getParentUserByUserId($user->id);
        }
        return view('client.course.meet',compact('parent'));
    }
    public function createMeet(Request $request)
    {
        
    }
}
