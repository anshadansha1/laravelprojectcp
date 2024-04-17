<?php

namespace Database\Seeders;

use App\Models\First;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FirstTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        First::create([
            'id' =>1,
            'name' => 'Anshad',
            'email' => 'anshad@gmail.com',
            'password' => '123',
        ]);
    }
}
