<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//user
use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepository;
//role
use App\Repositories\Role\RoleInterface;
use App\Repositories\Role\RoleRepository;
//permission
use App\Repositories\Permission\PermissionInterface;
use App\Repositories\Permission\PermissionRepository;
//permission role
use App\Repositories\PermissionRole\PermissionRoleInterface;
use App\Repositories\PermissionRole\PermissionRoleRepository;
//role user
use App\Repositories\RoleUser\RoleUserInterface;
use App\Repositories\RoleUser\RoleUserRepository;
//parent user
use App\Repositories\ParentUser\ParentUserInterface;
use App\Repositories\ParentUser\ParentUserRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserInterface::class,
            UserRepository::class
        );
        $this->app->bind(
            RoleInterface::class,
            RoleRepository::class
        );
        $this->app->bind(
            PermissionInterface::class,
            PermissionRepository::class
        );
        $this->app->bind(
            PermissionRoleInterface::class,
            PermissionRoleRepository::class
        );
        $this->app->bind(
            RoleUserInterface::class,
            RoleUserRepository::class
        );
        $this->app->bind(
            ParentUserInterface::class,
            ParentUserRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
