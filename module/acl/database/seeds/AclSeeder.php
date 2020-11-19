<?php
use Illuminate\Database\Seeder;

class AclSeeder extends Seeder
{
    public function run(){
        //create seed for roles
        DB::table('roles')->insert([
            [
                'name'=>'admin',
                'display_name'=>'Administrator',
                'Description'=>'Quyền quản trị tất cả'
            ],
            [
                'name'=>'module',
                'display_name'=>'Module',
                'Description'=>'Quyền quản trị module'
            ],
            [
                'name'=>'member',
                'display_name'=>'Member',
                'Description'=>'Thành viên'
            ],

        ]);
        //create seed for permission
        DB::table('permissions')->insert([
            [
                'name'=>'access_dashboard',
                'display_name'=>'Truy cập admin',
                'description'=>'Cho phép tài khoản truy cập admin',
                'module'=>'Acl'
            ],
            [
                'name'=>'role_index',
                'display_name'=>'Xem vai trò',
                'description'=>'Xem danh sách các vai trò quản trị',
                'module'=>'Acl'
            ],
            [
                'name'=>'role_create',
                'display_name'=>'Thêm vai trò',
                'description'=>'Thêm vai trò quản trị',
                'module'=>'Acl'
            ],
            [
                'name'=>'role_edit',
                'display_name'=>'Sửa vai trò',
                'description'=>'Sửa vai trò quản trị',
                'module'=>'Acl'
            ],
            [
                'name'=>'role_delete',
                'display_name'=>'Xóa vai trò',
                'description'=>'Xóa vai trò quản trị',
                'module'=>'Acl'
            ],
            [
                'name'=>'permission_index',
                'display_name'=>'Xem danh sách quyền',
                'description'=>'Xem danh sách các quyền quản trị',
                'module'=>'Acl'
            ],
        ]);

    }
}
