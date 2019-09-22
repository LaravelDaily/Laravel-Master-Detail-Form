<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '17',
                'title'      => 'product_create',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '18',
                'title'      => 'product_edit',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '19',
                'title'      => 'product_show',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '20',
                'title'      => 'product_delete',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '21',
                'title'      => 'product_access',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '22',
                'title'      => 'order_create',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '23',
                'title'      => 'order_edit',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '24',
                'title'      => 'order_show',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '25',
                'title'      => 'order_delete',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
            [
                'id'         => '26',
                'title'      => 'order_access',
                'created_at' => '2019-09-21 15:35:20',
                'updated_at' => '2019-09-21 15:35:20',
            ],
        ];

        Permission::insert($permissions);
    }
}
