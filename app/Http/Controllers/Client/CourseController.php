<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Course\CourseInterface;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $courseRepository;
    public function __construct(CourseInterface $courseRepos)
    {
        $this->courseRepository = $courseRepos;
    }
    public function index()
    {
        $courses = $this->courseRepository->getAll();
        return view('client.course.course',compact('courses'));
    }
}
