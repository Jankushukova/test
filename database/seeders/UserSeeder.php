<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
          'firstname'=>'admin',
          'lastname'=>'adminov',
          'email'=>'admin@mail.ru',
          'phone'=>'87777777777',
          'password'=>bcrypt('password'),
          'role_id'=>Role::ADMIN
      ]);
        User::create([
            'firstname'=>'aruzhan',
            'lastname'=>'aruzhan',
            'email'=>'aruzhan@mail.ru',
            'phone'=>'87777777777',
            'password'=>bcrypt('password'),
            'role_id'=>Role::CUSTOMER
        ]);
    }
}
