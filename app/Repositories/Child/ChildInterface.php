<?php
namespace App\Repositories\Child;

interface ChildInterface
{
    public function getChild();
    public function getChildByParentId($parent_id);
}
