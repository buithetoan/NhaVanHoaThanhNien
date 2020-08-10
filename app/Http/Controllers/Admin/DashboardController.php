<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $userRepository;
    public function __construct(UserInterface $userRepos)
    {
//        $this->middleware('guest', ['except' => 'logout']);
        $this->userRepository = $userRepos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_customer = $this->userRepository->getTotalUser();
        return view('admin.layouts.dashboards.index', compact('total_customer'));
    }
}
