<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    protected $table = "activities";
    protected $guarded = ['id'];
    protected $timestrap = true;
}
