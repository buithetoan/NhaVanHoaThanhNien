<?php
namespace App\Repositories\ClassRoom;
use App\Repositories\EloquentRepository;
use Illuminate\Support\Facades\DB;

class ClassRoomRepository extends EloquentRepository implements ClassRoomInterface {
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\ClassRoom::class;
    }
    public function getClassByCourseId($course_id)
    {
        return $this->_model::where('course_id',$course_id)->get();
    }
    public function getClassByChildId($child_id)
    {
        $classChild = DB::table('class_child')->where('child_id',$child_id)->get();
        $arrClass = array();
        foreach ($classChild as $cc){
            if ($cc->child_id == $child_id){
                $arrClass[] = $cc->class_id;
            }
        }
        return $this->_model::whereBetween('id',$arrClass)->get();
    }
}
