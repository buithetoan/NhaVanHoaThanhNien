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
}
