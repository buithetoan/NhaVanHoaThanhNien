<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActiveRequest;
use App\Models\Active;
use App\Repositories\Active\ActiveInterface;
use Illuminate\Http\Request;

class ActiveController extends Controller
{
    protected $activeRepository;
    public function __construct(ActiveInterface $activeRepos)
    {
        $this->activeRepository = $activeRepos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = $this->activeRepository->getAll();
        return view('admin.layouts.activities.index',compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActiveRequest $request)
    {
        $request->validated();
        $nameimage = "";
        if($request->hasFile('url_image'))
        {
            $nameimage=$request->url_image->getClientOriginalName();
            $request->url_image->move('images', $nameimage);
        }
        $data = new Active([
            'name' => $request->name,
            'title' => $request->title,
            'content'=> $request->txtcontent,
            'image' => $nameimage,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        $active = $this->activeRepository->create($data->toArray());
        $active->save();
        if ($active) return redirect('/admin/active')->with('message','Thêm mới thành cônh!');
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
        $active = $this->activeRepository->find($id);
        return view('admin.layouts.activities.edit',compact('active'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActiveRequest $request, $id)
    {
        if($request->hasFile('url_image'))
        {
            $imagename=$request->url_image->getClientOriginalName();
            $request->url_image->move('images', $imagename);
        } else $imagename = $request->image;
        $active = $this->activeRepository->find($id);
        $active->name = $request->name;
        $active->title = $request->title;
        $active->image = $imagename;
        $active->content = $request->txtContent;
        $active->start_date = $request->start_date;
        $active->end_date = $request->end_date;
        $result = $this->activeRepository->update($id, $active->toArray());

        return redirect('admin/active')->with('message','Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $active = $this->activeRepository->find($request->id);

        $activeDelete = $this->activeRepository->delete($active->id);

        if ($activeDelete) {
            return back()->with('message','Xóa thành công!');
        } else return back()->with('err','Đã xãy ra lỗi!');
    }
}
