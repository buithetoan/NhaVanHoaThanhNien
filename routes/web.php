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
    Route::get('/profile', 'HomeController@profilePage');
    Route::get('/active', 'ActiveController@index');
    Route::get('/active/detail', 'ActiveController@detail');
    Route::get('/course', 'CourseController@index');
    Route::get('/course/detail', 'CourseController@courseDetailPage');
    Route::get('/course/meet', 'CourseController@meetPage');
    Route::post('/course/meet', ['as'=>'course.createMeet','uses'=>'CourseController@createMeet']);
    Route::get('/course/register', 'CourseController@registerCourse');
    Route::post('/course/register',['as' => 'course.register', 'uses' => 'CourseController@register']);
    Route::post('/course/showValueChild', ['as'=>'course.showValueChild','uses'=>'CourseController@showValueChild']);
//    Route::get('/course/showValueChild', 'CourseController@showValueChild');

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
            Route::prefix('admin/parent')->group(function () {
                Route::get('', [
                    'as' => 'parent.index',
                    'uses' => 'ParentUserController@index',
                    'middleware' => 'checkacl:view_user'
                ]);
                Route::get('/create', [
                    'as' => 'parent.create',
                    'uses' => 'ParentUserController@create',
                    'middleware' => 'checkacl:create_user'
                ]);
                Route::post('/create', 'ParentUserController@store')->name('parent.store');
                Route::get('/edit/{id}', [
                    'as' => 'parent.edit',
                    'uses' => 'ParentUserController@edit',
                    'middleware' => 'checkacl:edit_user'
                ]);
                Route::put('/edit/{id}', 'ParentUserController@update')->name('parent.update');
                Route::delete('/delete', [
                    'as' => 'parent.delete',
                    'uses' =>'ParentUserController@destroy',
                    'middleware'=> 'checkacl:delete_user'
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
            Route::prefix('admin/active')->group(function () {
                Route::get('', [
                    'as' => 'active.index',
                    'uses' => 'ActiveController@index',
                    'middleware' => 'checkacl:view_active'
                ]);
                Route::get('/create', [
                    'as' => 'active.create',
                    'uses' => 'ActiveController@create',
                    'middleware' => 'checkacl:create_active'
                ]);
                Route::post('/create', 'ActiveController@store')->name('active.store');
                Route::get('/edit/{id}', [
                    'as' => 'active.edit',
                    'uses' => 'ActiveController@edit',
                    'middleware' => 'checkacl:edit_active'
                ]);
                Route::put('/edit/{id}', 'ActiveController@update')->name('active.update');
                Route::delete('/delete', [
                    'as' => 'active.delete',
                    'uses' =>'ActiveController@destroy',
                    'middleware'=> 'checkacl:delete_active'
                ]);
            });
            Route::prefix('admin/class')->group(function () {
                Route::get('', [
                    'as' => 'class.index',
                    'uses' => 'ClassRoomController@index',
                    'middleware' => 'checkacl:view_class'
                ]);
                Route::get('/create', [
                    'as' => 'class.create',
                    'uses' => 'ClassRoomController@create',
                    'middleware' => 'checkacl:create_class'
                ]);
                Route::post('/create', 'ClassRoomController@store')->name('class.store');
                Route::get('/edit/{id}', [
                    'as' => 'class.edit',
                    'uses' => 'ClassRoomController@edit',
                    'middleware' => 'checkacl:edit_class'
                ]);
                Route::put('/edit/{id}', 'ClassRoomController@update')->name('class.update');
                Route::delete('/delete', [
                    'as' => 'class.delete',
                    'uses' =>'ClassRoomController@destroy',
                    'middleware'=> 'checkacl:delete_class'
                ]);
            });
            Route::prefix('admin/appointment')->group(function () {
                Route::get('', [
                    'as' => 'appointment.index',
                    'uses' => 'AppointmentController@index',
                    'middleware' => 'checkacl:view_appointment'
                ]);
                Route::get('/edit/{id}', [
                    'as' => 'appointment.edit',
                    'uses' => 'AppointmentController@edit',
                    'middleware' => 'checkacl:edit_appointment'
                ]);
                Route::put('/edit/{id}', 'AppointmentController@update')->name('appointment.update');
            });
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
        });
    });
});
