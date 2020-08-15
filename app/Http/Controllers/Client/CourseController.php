<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Child;
use App\Models\ClassChild;
use App\Models\ClassRoom;
use App\Models\ParentUser;
use App\Repositories\Child\ChildInterface;
use App\Repositories\ClassChild\ClassChildInterface;
use App\Repositories\ClassRoom\ClassRoomInterface;
use App\Repositories\Course\CourseInterface;
use App\Repositories\ParentUser\ParentUserInterface;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    protected $courseRepository;
    protected $parentUserRepository;
    protected $userRepository;
    protected $roomRepository;
    protected $childRepository;
    protected $classChildRepository;
    public function __construct(CourseInterface $courseRepos,ParentUserInterface $parentUserRepos,ClassChildInterface $classChildRepos,
                                UserInterface $userRepos,ClassRoomInterface $roomRepos, ChildInterface $childRepos)
    {
        $this->courseRepository = $courseRepos;
        $this->parentUserRepository = $parentUserRepos;
        $this->userRepository = $userRepos;
        $this->roomRepository = $roomRepos;
        $this->childRepository = $childRepos;
        $this->classChildRepository = $classChildRepos;
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
    public function registerCourse(Request $request){
        if ($request->course_id){
            if (Auth::check()){
                $course = $this->courseRepository->find($request->course_id);
                $parentUser = $this->parentUserRepository->getParentUserByUserId(Auth::user()->id);
                $childs = Child::where('parent_id',$parentUser->id)->get();
                $rooms = ClassRoom::where('course_id',$course->id)->get();
                $listChillOfClass = $this->classChildRepository->getAll();
                return view('client.course.register',compact('course','childs','rooms','listChillOfClass'));
            }
            return back()->with('err','Vui lòng đăng nhập!');
        }
        return back()->with('err','Đã xảy ra lỗi!');
    }
    public function register(Request $request){
        if ($request->child_id == 0){
            $parentUser = $this->parentUserRepository->getParentUserByUserId(Auth::user()->id);
            $child = new Child([
                'name'=>$request->child_name,
                'year_old'=>$request->year_old,
                'parent_id'=>$parentUser->id,
            ]);
            $createChild = $this->childRepository->create($child->toArray());
            $createChild->rooms()->attach($request->rooms);
            $createChild->save();
        }else{
            $child = $this->childRepository->find($request->child_id);
            $child->rooms()->attach($request->rooms);
        }
        return redirect('/home');
    }
    public function showValueChild(Request $request){
        if ($request->child_id > 0){
            $child = $this->childRepository->find($request->child_id);
            $classChilds = DB::table('class_child')->where('child_id',$child->id)->select('class_id')->distinct()->get();
            $arr = array();
            foreach ($classChilds as $cc){
                $arr[] = $cc->class_id;
            }
            $course = $this->courseRepository->find($request->course_id);
            $arrClassChildNotJoin = DB::table('class_room')->whereNotIn('id',$arr)->where('course_id',$course->id)->distinct()->get();
            $listChillOfClass = $this->classChildRepository->getAll();
            $arrResultClass = array();
            foreach ($arrClassChildNotJoin as $room){
                $request = $room->class_member - $listChillOfClass->where('class_id',$room->id)->count();
                if ($request>0){
                    $arrResultClass[] = $room;
                }
            }

            $result = [$arrResultClass,[$child]];
            return response()->json($result);
        }
        else{
            $classChilds = DB::table('class_child')->select('class_id')->distinct()->get();
            $arr = array();
            foreach ($classChilds as $cc){
                $arr[] = $cc->class_id;
            }
            $arrClassChildNotJoin = DB::table('class_room')->where('course_id',$request->course_id)->distinct()->get();

            $result = [$arrClassChildNotJoin,[]];
            return response()->json($result);
        }
    }
    public function meetPage(Request $request)
    {
        $parent = new  ParentUser();
        if(Auth::check()){
            $user = $this->userRepository->find(Auth::user()->id);
            $parent = $this->parentUserRepository->getParentUserByUserId($user->id);
        }
        $course = $this->courseRepository->find($request->course_id);
        return view('client.course.meet',compact('parent','course'));
    }
    public function createMeet(Request $request)
    {
        $course = $this->courseRepository->find($request->course_id);
        $parentUser = $this->parentUserRepository->getParentUserByUserId(Auth::user()->id);
        $meet = new Appointment([
            'name'=>'Khảo sát chất lượng lớp học ',
            'description'=>'Khóa học: '.$course->name,
            'start_date'=> $request->date.' '.$request->time,
            'status'=>0,
            'parent_id'=>$parentUser->id,
        ]);
        $meet->save();
        if ($meet) return redirect('/home')->with('message','Tạo mới thành công!');
        else return back()->with('err','Đã xãy ra lõi!');
    }
}
