<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Models\ParentUser;
use App\Models\User;
use App\Repositories\Child\ChildInterface;
use App\Repositories\ClassRoom\ClassRoomInterface;
use App\Repositories\Course\CourseInterface;
use App\Repositories\ClassChild\ClassChildInterface;
use App\Repositories\ParentUser\ParentUserInterface;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChildController extends Controller
{
    protected $childRepository;
    protected $parentRepository;
    protected $classRoomRepository;
    protected $classChildRepository;
    protected $userRepository;
    public function __construct(ChildInterface $childRepos, ParentUserInterface $parentRepos,UserInterface $userRepos, ClassRoomInterface $classRoomRepos, ClassChildInterface $classChildRepos)
    {
        $this->parentRepository = $parentRepos;
        $this->childRepository = $childRepos;
        $this->classRoomRepository = $classRoomRepos;
        $this->userRepository = $userRepos;
        $this->classChildRepository = $classChildRepos;
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
        $rooms = $this->classRoomRepository->getAll();
        $classChild = $this->classChildRepository->getAll();
        $count = $this->classChildRepository->getListClass();
        return view('admin.layouts.childs.index',compact('count','childs','parents','rooms','classChild'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = $this->classChildRepository->getListClass();
        return view('admin.layouts.childs.create',compact('parents','rooms'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $userCreate = $this->userRepository->create($user->toArray());
        // Insert data to role_permission
        $userCreate->roles()->attach(2);

        $userCreate->save();
        $parentUser = new ParentUser([
            'full_name' => $request->full_name,
            'address' => $request->address,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'user_id' =>$userCreate->id
        ]);
        $createParentUser = $this->parentRepository->create($parentUser->toArray());
        $createParentUser->save();
        $child = new Child([
           'name'=>$request->name,
           'year_old'=>$request->year_old,
           'parent_id'=>$createParentUser->id,
        ]);
        $createChild = $this->childRepository->create($child->toArray());
        $createChild->rooms()->attach($request->rooms);
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
        $rooms = $this->classRoomRepository->getAll();
        $listRoomOfChild =$this->classChildRepository->getAllClassOfChild($id);
        return view('admin.layouts.childs.edit',compact('child','parents','rooms','listRoomOfChild'));
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
            $delete =  $this->classChildRepository->deleteClassOfChild($id);

            $childUpdate = $this->childRepository->find($id);
            $childUpdate->name = $request->name;
            $childUpdate->year_old = $request->year_old;
            $childUpdate->rooms()->attach($request->rooms);
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

            $this->classChildRepository->deleteClassOfChild($child->id);

            $childDelete = $this->childRepository->delete($child->id);

            if ($childDelete) return back()->with('message','Xóa thành công!');
            else return back()->with('err','Đã xãy ra lỗi!');
        } catch (Exception $e) {

        }
    }
}
