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
    public function getByKeyword($keyword)
    {
        return $this->_model::where('name', 'like', '%'.$keyword.'%')->get();
    }
}
