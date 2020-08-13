<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Repositories\Child\ChildInterface;
use App\Repositories\Course\CourseInterface;
use App\Repositories\CourseChild\CourseChildInterface;
use App\Repositories\ParentUser\ParentUserInterface;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    protected $childRepository;
    protected $parentRepository;
    protected $courseRepository;
    protected $courseChildRepository;
    public function __construct(ChildInterface $childRepos, ParentUserInterface $parentRepos, CourseInterface $courseRepos, CourseChildInterface $courseChildRepos)
    {
        $this->parentRepository = $parentRepos;
        $this->childRepository = $childRepos;
        $this->courseRepository = $courseRepos;
        $this->courseChildRepository = $courseChildRepos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childs = $this->childRepository->getAll();
//        dd($childs);
        $parents = $this->parentRepository->getAll();
        $courses = $this->courseRepository->getAll();
        $courseChild = $this->courseChildRepository->getAll();
        $count = $this->courseChildRepository->getListCourse();
        return view('admin.layouts.childs.index',compact('count','childs','parents','courses','courseChild'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = $this->parentRepository->getPluck('full_name','id');
        $courses = $this->courseChildRepository->getListCourse();
        return view('admin.layouts.childs.create',compact('parents','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $child = new Child([
           'name'=>$request->name,
           'year_old'=>$request->year_old,
           'parent_id'=>$request->parent_id,
        ]);
        $createChild = $this->childRepository->create($child->toArray());
        $createChild->courses()->attach($request->courses);
        $createChild->save();
        if ($createChild) return redirect('/admin/child')->with('message','Tạo mới thành công!');
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
        $child = $this->childRepository->find($id);
        $parents = $this->parentRepository->getPluck('full_name','id');
        $courses = $this->courseRepository->getAll();
        $listCourseOfChild =$this->courseChildRepository->getAllCourseOfChild($id);
        return view('admin.layouts.childs.edit',compact('child','parents','courses','listCourseOfChild'));
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
        try {
            $delete =  $this->courseChildRepository->deleteCourseOfChild($id);

            $childUpdate = $this->childRepository->find($id);
            $childUpdate->name = $request->name;
            $childUpdate->year_old = $request->year_old;
            $childUpdate->courses()->attach($request->courses);
            $result = $this->childRepository->update($id, $childUpdate->toArray());
            return redirect('admin/child')->with('message','Cập nhật thành công!');
        } catch (Exception $e) {

        }
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
            $child = $this->childRepository->find($request->id);

            $this->courseChildRepository->deleteCourseOfChild($child->id);

            $childDelete = $this->childRepository->delete($child->id);

            if ($childDelete) return back()->with('message','Xóa thành công!');
            else return back()->with('err','Đã xãy ra lỗi!');
        } catch (Exception $e) {

        }
    }
}
