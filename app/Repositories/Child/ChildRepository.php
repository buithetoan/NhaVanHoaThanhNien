<?php
namespace App\Repositories\Child;
use App\Repositories\EloquentRepository;

class ChildRepository extends EloquentRepository implements ChildInterface {
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Child::class;
    }
}
