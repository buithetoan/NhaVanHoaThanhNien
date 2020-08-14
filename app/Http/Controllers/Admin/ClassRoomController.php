<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Repositories\ClassChild\ClassChildInterface;
use App\Repositories\ClassRoom\ClassRoomInterface;
use App\Repositories\Course\CourseInterface;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    protected $roomRepository;
    protected $courseRepository;
    protected $classChildRepository;
    public function __construct(ClassRoomInterface $roomRepos,CourseInterface $courseRepos, ClassChildInterface $classChildRepos)
    {
        $this->roomRepository = $roomRepos;
        $this->courseRepository = $courseRepos;
        $this->classChildRepository = $classChildRepos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = $this->roomRepository->getAll();
        $courses = $this->courseRepository->getAll();
        $listChillOfClass = $this->classChildRepository->getAll();
        return view('admin.layouts.class_rooms.index',compact('rooms','courses','listChillOfClass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = $this->courseRepository->getPluck('name','id');
        return view('admin.layouts.class_rooms.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = $this->courseRepository->find($request->course_id);
        $data = new ClassRoom([
            'name'=>$request->name,
            'description'=>$request->description,
            'course_id'=>$request->course_id,
            'class_member'=>$course->maximum_student,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
        ]);
        $createClass = $this->roomRepository->create($data->toArray());
        $createClass->save();
        if ($createClass) return redirect('/admin/class')->with('message','Tạo mới thành công!');
        else return back()->with('err','Đã xãy ra lõi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = $this->roomRepository->find($id);
        $courses = $this->courseRepository->getPluck('name','id');
        return view('admin.layouts.class_rooms.edit',compact('room','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = $this->roomRepository->find($id);
        $room->name = $request->name;
        $room->description = $request->description;
        $room->course_id = $request->course_id;
        $room->start_date = $request->start_date;
        $room->end_date = $request->end_date;
        $this->roomRepository->update($id,$room->toArray());
        return redirect('admin/class')->with('message','Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $room = $this->roomRepository->find($request->id);

            $roomDelete = $this->roomRepository->delete($room->id);

            if ($roomDelete) {
                return back()->with('message','Xóa thành công!');
            } else return back()->with('err','Đã xãy ra lỗi!');
        } catch (Exception $e) {

        }
    }
}
