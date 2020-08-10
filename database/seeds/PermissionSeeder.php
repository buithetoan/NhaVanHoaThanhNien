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
    }
}
