<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id' => Uuid::uuid4(),
            'name' => 'Hajar Aswad',
            'email' => 'hajaraswadkom@gmail.com',
            'role'  => 'super admin',
        ]);
    }
}
