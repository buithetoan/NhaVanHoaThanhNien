<?php
namespace App\Repositories\ParentUser;
use App\Repositories\EloquentRepository;

class ParentUserRepository extends EloquentRepository implements ParentUserInterface{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\ParentUser::class;
    }

    public function getParentUserByUserId($id){
        return $this->_model::where('user_id', $id)->get()->first();
    }
}
