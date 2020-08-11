<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Repositories\Course\CourseInterface;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $courseRepository;
    public function __construct(CourseInterface $courseRepos)
    {
        $this->courseRepository = $courseRepos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->courseRepository->getAll();
        return view('admin.layouts.courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $request->validated();
        $nameimage = "";
        if($request->hasFile('url_image'))
        {
            $nameimage=$request->url_image->getClientOriginalName();
            $request->url_image->move('images', $nameimage);
        }
        $data = new Course([
            'name' => $request->name,
            'title' => $request->title,
            'content'=> $request->txtcontent,
            'image' => $nameimage,
            'price' => $request->price,
            'discount' => $request->discount,
            'maximum_student' => $request->maximum_student,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        $course = $this->courseRepository->create($data->toArray());
        $course->save();
        if ($course) return redirect('/admin/course')->with('message','Thêm mới thành cônh!');
        else return back()->with('err','Đã xảy ra lỗi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = $this->courseRepository->find($id);
        return view('admin.layouts.courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, $id)
    {
        if($request->hasFile('image'))
        {
            $imagename=$request->url_image->getClientOriginalName();
            $request->url_image->move('images', $imagename);
        } else $imagename = $request->url_image;
        $course = $this->courseRepository->find($id);
        $course->name = $request->name;
        $course->title = $request->title;
        $course->content = $request->txtContent;
        $course->maximum_student = $request->maximum_student;
        $course->price = $request->price;
        $course->discount = $request->discount;
        $course->start_date = $request->start_date;
        $course->end_date = $request->end_date;
        $result = $this->courseRepository->update($id, $course->toArray());

        return redirect('admin/course')->with('message','Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $course = $this->courseRepository->find($request->id);

        $course = $this->courseRepository->delete($course->id);

        if ($course) {
            return back()->with('message','Xóa thành công!');
        } else return back()->with('err','Đã xãy ra lỗi!');
    }
}
