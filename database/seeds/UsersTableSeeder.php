<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$ZRKvYZICF.lXR3ATJR9v4eEHQ2I7xqWRaEgYLb1spt6d9m3tvFsQi',
                'remember_token' => null,
                'created_at'     => '2019-09-21 15:31:45',
                'updated_at'     => '2019-09-21 15:31:45',
            ],
        ];

        User::insert($users);
    }
}
