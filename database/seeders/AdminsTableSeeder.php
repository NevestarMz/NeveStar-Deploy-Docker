<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');
        $admin = new Admin;
        $admin->name = 'Rivaldo António';
        $admin->role = 'admin';
        $admin->mobile = '+258850492263';
        $admin->email = 'dev@nevestar.co.mz';
        $admin->password = $password;
        $admin->image = 'assets/team-member/rivaldo_perfil.png';
        $admin->status = '1';
        $admin->save();

    }
}
