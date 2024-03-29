<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       
        AdminUser::create([
            'name' => 'jhon',
             'email' => 'user@example.com',
             'password' =>bcrypt('12345678') ,
         ]);
    }
}
