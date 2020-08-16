<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Active;
use App\Repositories\Active\ActiveInterface;
use Illuminate\Http\Request;

class ActiveController extends Controller
{
    protected $activeRepository;
    public function __construct(ActiveInterface $activeRepos)
    {
        $this->activeRepository = $activeRepos;
    }
    public function index(Request $request)
    {
        $activities = $this->activeRepository->getAll();
        if ($request->keyword){
            $activities = $this->activeRepository->getByKeyword($request->keyword);
        }
        return view('client.active.active',compact('activities'));
    }
    public function detail(Request $request)
    {
        $active = new Active();
        if ($request->active_id){
            $active = $this->activeRepository->find($request->active_id);
        }
        $activities = $this->activeRepository->getTopActive($request->active_id);
        return view('client.active.active-detail',compact('active','activities'));
    }
}
