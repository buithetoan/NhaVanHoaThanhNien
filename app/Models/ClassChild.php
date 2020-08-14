<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassChild extends Model
{
    protected $table = "class_child";
    protected $guarded = ['id'];
    protected $timestrap = true;
}
