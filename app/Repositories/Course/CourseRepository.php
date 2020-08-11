<?php
namespace App\Repositories\Course;
use App\Repositories\EloquentRepository;

class CourseRepository extends EloquentRepository implements CourseInterface {
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Course::class;
    }
}
