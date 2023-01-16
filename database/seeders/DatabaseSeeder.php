<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Dillon John',
            'email' => 'djohn@example.com',
            'password' => bcrypt(env("USER_SEEDER_TEST_PW")),
        ]);

        \App\Models\User::factory(100)->create();
    }
}
