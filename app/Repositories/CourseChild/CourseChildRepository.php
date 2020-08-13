<?php
namespace App\Repositories\CourseChild;
use App\Models\Course;
use App\Repositories\EloquentRepository;

class CourseChildRepository extends EloquentRepository implements CourseChildInterface {
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\CourseChild::class;
    }
    public function getAllCourseOfChild($child_id)
    {
        return $this->_model::where('child_id', $child_id)->pluck('course_id');
    }
    public function deleteCourseOfChild($child_id)
    {
        return $this->_model::where('child_id', $child_id)->delete();
    }
    public function getAllChildOfCourse($course_id)
    {
        $result = $this->_model::where('course_id',$course_id)->count();
        dd($result);
    }
    public function getListCourse()
    {
        $courses = Course::all();
        $arr = array();
        foreach ($courses as $course){
            $count = $this->_model::where('course_id',$course->id)->count();
            if($course->maximum_student > $count){
                $arr[] = $course;
            }
        }
        return $arr;
    }
}
