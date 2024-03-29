<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            "username" =>"admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("admin"),
            "account_type" => "super-admin"
        ],
        [
            "username" =>"hainguyen",
            "email" => "nguyenngochai160897@gmail.com",
            "password" => bcrypt("hainguyen"),
            "account_type" => "admin"
        ],
        [
            "username" =>"a",
            "email" => "a@gmail.com",
            "password" => bcrypt("a"),
            "account_type" => "admin"
        ]
        ]);
    }
}
