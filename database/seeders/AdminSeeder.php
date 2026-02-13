<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@sayfelfalah.sch.id'],
            [
                'name' => 'Admin Sayf El Falah',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
            ]
        );
    }
}
