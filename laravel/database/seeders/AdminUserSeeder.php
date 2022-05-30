<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@atrbpntanggamus.com',
            'password' =>  bcrypt('wifinyarusak'),
        ]);

        $user->assignRole('superadmin');

        $user1 = User::create([
            'name' => 'Admin',
            'email' => 'admin@atrbpntanggamus.com',
            'password' =>  bcrypt('wifinyarusak'),
        ]);

        $user1->assignRole('admin');
    }
}
