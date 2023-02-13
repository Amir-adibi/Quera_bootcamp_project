<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Amir Adibi',
            'email' => 'adibi_amir@yahoo.com',
            'mobile' => '09229479515',
            'password' => '123456'
        ]);
    }
}
