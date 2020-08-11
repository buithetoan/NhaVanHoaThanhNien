<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ParentUser;
use App\Models\User;
use App\Repositories\User\UserInterface;
use App\Repositories\Role\RoleInterface;
use App\Repositories\RoleUser\RoleUserInterface;
use App\Repositories\ParentUser\ParentUserInterface;
use Str;
use Auth;
use App\Http\Requests\RegisterRequest;
class RegisterController extends Controller
{
    protected $redirectTo = '/home';
    protected $userRepository;
    protected $roleRepository;
    protected $roleUserRepository;
    protected $parentRepository;
    public function __construct(UserInterface $userRepos, RoleInterface $roleRepos, RoleUserInterface $roleUserRepos,ParentUserInterface $parentRepos)
    {
        $this->userRepository = $userRepos;
        $this->roleRepository = $roleRepos;
        $this->roleUserRepository = $roleUserRepos;
        $this->parentRepository = $parentRepos;
    }
    public  function  showRegister(){
        return view('client.auth.register');
    }
    protected function create(RegisterRequest $request)
    {
        $request->validated();
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        // Auth::login($user,true);
        $userCreate = $this->userRepository->create($user->toArray());
        // Insert data to role_permission
        $userCreate->roles()->attach(2);

        $parent = new ParentUser([
            'full_name' => $request->full_name,
            'address' => $request->address,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'user_id' => $userCreate->id,
        ]);
        $createParent = $this->parentRepository->create($parent->toArray());
        $createParent->save();
        Auth::login($userCreate,true);
        return redirect('/home');
    }
}
