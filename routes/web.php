<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace'=>'Client','prefix'=>'/'],function (){
    Route::get('/home', 'HomeController@index');
    Route::get('/active', 'HomeController@activePage');
    Route::get('/course', 'HomeController@coursePage');
    Route::get('/blog', 'HomeController@blogPage');
});
Route::group(['middleware' => ['web']], function () {
    Route::get('login', 'Auth\LoginController@webLogin');
    Route::post('login', ['as'=>'client.login','uses'=>'Auth\LoginController@webLoginPost']);
    Route::get('logout', 'Auth\LoginController@webLogout');
    Route::post('logout', ['as'=>'client.logout','uses'=>'Auth\LoginController@webLogout']);
    Route::get('register','Client\RegisterController@showRegister');
    Route::post('register',['as' => 'client.register', 'uses' => 'Client\RegisterController@create']);

    Route::get('admin/login', 'Admin\LoginController@showAdminLogin');
    Route::post('admin/login', ['as'=>'admin.login','uses'=>'Admin\LoginController@adminLogin']);
    Route::get('admin/logout', 'Admin\LoginController@adminLogout');
    Route::post('admin/logout', ['as'=>'admin.logout','uses'=>'Admin\LoginController@adminLogout']);

    Route::middleware(['checkuser'])->group(function () {
        Route::group(['namespace'=>'Admin','prefix'=>'/'],function (){
            Route::get('/admin/dashboard', 'DashboardController@index');
            Route::prefix('admin/user')->group(function () {
                Route::get('', [
                    'as' => 'user.index',
                    'uses' => 'UserController@index',
                    'middleware' => 'checkacl:view_user'
                ]);
                Route::get('/create', [
                    'as' => 'user.create',
                    'uses' => 'UserController@create',
                    'middleware' => 'checkacl:create_user'
                ]);
                Route::post('/create', 'UserController@store')->name('user.store');
                Route::get('/edit/{id}', [
                    'as' => 'user.edit',
                    'uses' => 'UserController@edit',
                    'middleware' => 'checkacl:edit_user'
                ]);
                Route::put('/edit/{id}', 'UserController@update')->name('user.update');
                Route::delete('/delete', [
                    'as' => 'user.delete',
                    'uses' =>'UserController@destroy',
                    'middleware'=> 'checkacl:delete_user'
                ]);
            });
            Route::prefix('admin/role')->group(function () {
                Route::get('', [
                    'as' => 'role.index',
                    'uses' => 'RoleController@index',
                    'middleware' => 'checkacl:view_role'
                ]);
                Route::get('/create', [
                    'as' => 'role.create',
                    'uses' => 'RoleController@create',
                    'middleware' => 'checkacl:create_role'
                ]);
                Route::post('/create', 'RoleController@store')->name('role.store');
                Route::get('/edit/{id}', [
                    'as' => 'role.edit',
                    'uses' => 'RoleController@edit',
                    'middleware' => 'checkacl:edit_role'
                ]);
                Route::put('/edit/{id}', 'RoleController@update')->name('role.update');
                Route::delete('/delete', [
                    'as' => 'role.delete',
                    'uses' =>'RoleController@destroy',
                    'middleware'=> 'checkacl:delete_role'
                ]);
            });
            Route::prefix('admin/child')->group(function () {
                Route::get('', [
                    'as' => 'child.index',
                    'uses' => 'ChildController@index',
                    'middleware' => 'checkacl:view_child'
                ]);
                Route::get('/create', [
                    'as' => 'child.create',
                    'uses' => 'ChildController@create',
                    'middleware' => 'checkacl:create_child'
                ]);
                Route::post('/create', 'ChildController@store')->name('child.store');
                Route::get('/edit/{id}', [
                    'as' => 'child.edit',
                    'uses' => 'ChildController@edit',
                    'middleware' => 'checkacl:edit_child'
                ]);
                Route::put('/edit/{id}', 'ChildController@update')->name('child.update');
                Route::delete('/delete', [
                    'as' => 'child.delete',
                    'uses' =>'ChildController@destroy',
                    'middleware'=> 'checkacl:delete_child'
                ]);
            });
            Route::prefix('admin/course')->group(function () {
                Route::get('', [
                    'as' => 'course.index',
                    'uses' => 'CourseController@index',
                    'middleware' => 'checkacl:view_course'
                ]);
                Route::get('/create', [
                    'as' => 'course.create',
                    'uses' => 'CourseController@create',
                    'middleware' => 'checkacl:create_course'
                ]);
                Route::post('/create', 'CourseController@store')->name('course.store');
                Route::get('/edit/{id}', [
                    'as' => 'course.edit',
                    'uses' => 'CourseController@edit',
                    'middleware' => 'checkacl:edit_course'
                ]);
                Route::put('/edit/{id}', 'CourseController@update')->name('course.update');
                Route::delete('/delete', [
                    'as' => 'course.delete',
                    'uses' =>'CourseController@destroy',
                    'middleware'=> 'checkacl:delete_course'
                ]);
            });
        });
    });
});
