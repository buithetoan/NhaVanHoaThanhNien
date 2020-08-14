<?php
namespace App\Repositories\ClassChild;
use App\Models\ClassRoom;
use App\Repositories\EloquentRepository;

class ClassChildRepository extends EloquentRepository implements ClassChildInterface {
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\ClassChild::class;
    }
    public function getAllClassOfChild($child_id)
    {
        return $this->_model::where('child_id', $child_id)->pluck('class_id');
    }
    public function deleteClassOfChild($child_id)
    {
        return $this->_model::where('child_id', $child_id)->delete();
    }
    public function getAllChildOfClass($class_id)
    {
        $result = $this->_model::where('class_id',$class_id)->count();
        dd($result);
    }
    public function getListClass()
    {
        $class_rooms = ClassRoom::all();
        $arr = array();
        foreach ($class_rooms as $class_room){
            $count = $this->_model::where('class_id',$class_room->id)->count();
            if($class_room->class_member > $count){
                $arr[] = $class_room;
            }
        }
        return $arr;
    }
}
