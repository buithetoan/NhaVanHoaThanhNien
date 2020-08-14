<?php
namespace App\Repositories\ClassRoom;
use App\Repositories\EloquentRepository;

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
}
