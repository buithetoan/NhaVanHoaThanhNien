<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = "class_room";
    protected $guarded = ['id'];
    protected $timestrap = true;

    public function childs()
    {
        return $this->belongsToMany('App\Models\Child', 'class_child','class_id','child_id');
    }
}
