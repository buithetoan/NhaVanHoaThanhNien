<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $table = "childs";
    protected $guarded = ['id'];
    protected $timestrap = true;
    public function parents()
    {
        return $this->belongsto('App\Models\ParentUser');
    }
    public function courses()
    {
        return $this->belongstoMany('App\Models\Course', 'course_child','child_id','course_id');
    }
}
