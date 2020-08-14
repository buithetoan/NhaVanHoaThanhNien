<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user
        DB::table('permissions')->insert([
            'name'=>'create_user',
            'display_name'=>'Create user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'edit_user',
            'display_name'=>'Edit user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'view_user',
            'display_name'=>'View user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'detail_user',
            'display_name'=>'Detail user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'delete_user',
            'display_name'=>'Delete user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //role
        DB::table('permissions')->insert([
            'name'=>'create_role',
            'display_name'=>'Create role',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'edit_role',
            'display_name'=>'Edit role',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'view_role',
            'display_name'=>'View role',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'detail_role',
            'display_name'=>'Detail role',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'delete_role',
            'display_name'=>'Delete role',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //child
        DB::table('permissions')->insert([
            'name'=>'create_child',
            'display_name'=>'Create child',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'edit_child',
            'display_name'=>'Edit child',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'view_child',
            'display_name'=>'View child',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'detail_child',
            'display_name'=>'Detail child',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'delete_child',
            'display_name'=>'Delete child',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //course
        DB::table('permissions')->insert([
            'name'=>'create_course',
            'display_name'=>'Create course',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'edit_course',
            'display_name'=>'Edit course',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'view_course',
            'display_name'=>'View course',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'detail_course',
            'display_name'=>'Detail course',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'delete_course',
            'display_name'=>'Delete course',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //activities
        DB::table('permissions')->insert([
            'name'=>'create_active',
            'display_name'=>'Create active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'edit_active',
            'display_name'=>'Edit active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'view_active',
            'display_name'=>'View active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'detail_active',
            'display_name'=>'Detail active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'delete_active',
            'display_name'=>'Delete active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //appointment
        DB::table('permissions')->insert([
            'name'=>'create_appointment',
            'display_name'=>'Create appointment',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'edit_appointment',
            'display_name'=>'Edit appointment',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'view_appointment',
            'display_name'=>'View appointment',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'detail_appointment',
            'display_name'=>'Detail appointment',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'delete_appointment',
            'display_name'=>'Delete appointment',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        //class
        DB::table('permissions')->insert([
            'name'=>'create_class',
            'display_name'=>'Create class',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'edit_class',
            'display_name'=>'Edit class',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'view_class',
            'display_name'=>'View class',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'detail_class',
            'display_name'=>'Detail class',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name'=>'delete_class',
            'display_name'=>'Delete class',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
