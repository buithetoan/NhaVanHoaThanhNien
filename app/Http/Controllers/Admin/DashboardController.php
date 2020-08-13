<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Child\ChildInterface;
use App\Repositories\Course\CourseInterface;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $childRepository;
    protected $courseRepository;
    public function __construct(ChildInterface $childRepos, CourseInterface $courseRepos)
    {
//        $this->middleware('guest', ['except' => 'logout']);
        $this->childRepository = $childRepos;
        $this->courseRepository = $courseRepos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_child = $this->childRepository->getAll()->count();
        $total_course = $this->courseRepository->getAll()->count();
        return view('admin.layouts.dashboards.index', compact('total_child','total_course'));
    }
}
