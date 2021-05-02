<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'rol_id' => 1
        ]);
        User::create([
            'username' => 'juan_municipal',
            'email' => 'juan@gmail.com',
            'password' => Hash::make('123456'),
            'rol_id' => 2
        ]);
        User::create([
            'username' => 'ana_coordiandora',
            'email' => 'ana@admin.com',
            'password' => Hash::make('123456'),
            'rol_id' => 3
        ]);
    }
}
