<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ParentUser;
use App\Models\User;
use App\Repositories\Child\ChildInterface;
use App\Repositories\ParentUser\ParentUserInterface;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;

class ParentUserController extends Controller
{
    protected $userRepository;
    protected $parentUserRepository;
    protected $childRepository;
    public function __construct(ParentUserInterface $parentUserRepos, ChildInterface $childRepos, UserInterface $userRepos)
    {
        $this->parentUserRepository = $parentUserRepos;
        $this->childRepository= $childRepos;
        $this->userRepository = $userRepos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = $this->parentUserRepository->getAll();
        $childs = $this->childRepository->getAll();
        return view('admin.layouts.parents.index',compact('parents','childs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.parents.create');
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
        $createParentUser = $this->parentUserRepository->create($parentUser->toArray());
        $createParentUser->save();

        if ($createParentUser) return redirect('/admin/parent')->with('message','Tạo mới thành công!');
        else return back()->with('err','Đã xãu ra lỗi!');
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
        $parent = $this->parentUserRepository->find($id);
        return view('admin.layouts.parents.edit',compact('parent'));
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
        $parentUpdate = $this->parentUserRepository->find($id);
        $parentUpdate->full_name = $request->full_name;
        $parentUpdate->address = $request->address;
        $parentUpdate->phone_no = $request->phone_no;
        $parentUpdate->email = $request->email;
        $result = $this->parentUserRepository->update($id, $parentUpdate->toArray());

        return redirect('admin/parent')->with('message','Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $parentDelete = $this->parentUserRepository->find($request->id);

        $request = $this->parentUserRepository->delete($parentDelete->id);

        if ($request) {
            return back()->with('message','Xóa thành công!');
        } else return back()->with('err','Đã xãy ra lỗi!');
    }
}
