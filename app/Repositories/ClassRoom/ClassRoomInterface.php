<?php
namespace App\Repositories\ClassRoom;

interface ClassRoomInterface
{
    public function getClassByCourseId($course_id);
    public function getClassByChildId($child_id);
}
