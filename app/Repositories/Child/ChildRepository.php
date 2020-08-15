<?php
namespace App\Repositories\Child;
use App\Repositories\EloquentRepository;
use App\Models\CourseChild;
use Illuminate\Support\Facades\DB;
class ChildRepository extends EloquentRepository implements ChildInterface {
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Child::class;
    }
    public function getChild()
    {
        $classChild = DB::table('class_child')->get();
        $arr = array();
        foreach ($classChild as $cc){
            $arr[] = $cc->child_id;
        }
        $childs = $this->_model::all();
        return $childs->whereBetween('id',$arr);
    }
    public function getChildByParentId($parent_id)
    {
        return $this->_model::where('parent_id',$parent_id)->get();
    }
}
