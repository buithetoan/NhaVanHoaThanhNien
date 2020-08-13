<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Active\ActiveInterface;
use Illuminate\Http\Request;

class ActiveController extends Controller
{
    protected $activeRepository;
    public function __construct(ActiveInterface $activeRepos)
    {
        $this->activeRepository = $activeRepos;
    }
    public function index()
    {
        $activities = $this->activeRepository->getAll();
        return view('client.active.active',compact('activities'));
    }
}
