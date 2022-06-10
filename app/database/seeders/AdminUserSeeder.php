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
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@atrbpntanggamus.go.id',
            'password' =>  bcrypt('wifinyarusak'),
        ]);

        $admin->assignRole('admin');

        $superadmin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@atrbpntanggamus.go.id',
            'password' =>  bcrypt('wifinyarusak'),
        ]);

        $superadmin->assignRole('superadmin');
    }
}
