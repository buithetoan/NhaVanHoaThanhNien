<?php
namespace App\Repositories\CourseChild;

interface CourseChildInterface
{
    public function getAllCourseOfChild($child_id);
    public function deleteCourseOfChild($child_id);
    public function getAllChildOfCourse($course_id);
    public function getListCourse();
}
