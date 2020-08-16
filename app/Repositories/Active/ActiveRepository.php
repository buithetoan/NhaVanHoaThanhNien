<?php
namespace App\Repositories\Active;
use App\Repositories\EloquentRepository;

class ActiveRepository extends EloquentRepository implements ActiveInterface {
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Active::class;
    }
    public function getTopActive($id)
    {
        return $this->_model::where('id','!=',$id)->orderBy('start_date','DESC')->take(5)->get();
    }
    public function getByKeyword($keyword)
    {
        return $this->_model::where('name', 'like', '%'.$keyword.'%')->get();
    }
}
