<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";
    protected $guarded = ['id'];
    protected $timestrap = true;
    public function childs()
    {
        return $this->belongsToMany('App\Models\Child', 'course_child','course_id','child_id');
    }
}
