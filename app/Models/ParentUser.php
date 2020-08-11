<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentUser extends Model
{
    protected $table = "parents";
    protected $guarded = ['id'];
    protected $timestrap = true;

    public function users()
    {
        return $this->hasOne('App\Models\User', 'user_id');
    }
    public function childs()
    {
        return $this->hasMany('App\Models\Child');
    }
}
