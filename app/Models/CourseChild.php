<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseChild extends Model
{
    protected $table = "course_child";
    protected $guarded = ['id'];
    protected $timestrap = true;
}
