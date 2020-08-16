<?php
namespace App\Repositories\Active;

interface ActiveInterface
{
    public function getTopActive($id);
    public function getByKeyword($keyword);
}
