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
    public function rooms()
    {
        return $this->belongstoMany('App\Models\ClassRoom', 'class_child','child_id','class_id');
    }
}
