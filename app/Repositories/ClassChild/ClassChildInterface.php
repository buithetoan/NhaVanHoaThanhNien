<?php
namespace App\Repositories\ClassChild;

interface ClassChildInterface
{
    public function getAllClassOfChild($child_id);
    public function deleteClassOfChild($child_id);
    public function getAllChildOfClass($class_id);
    public function getListClass();
}
