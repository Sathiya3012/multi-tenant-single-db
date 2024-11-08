<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TenantSeeder::class,
        ]);

        // User::factory(10)->create();

        \App\Models\User::factory()->create([
            'id' => (string) Str::uuid(),
            'name' => 'Sathiya',
            'email' => 'sathiya@tecofize.com',
            'password' => Hash::make('password'),
            'tenant_id' => 1,
        ]);

        \App\Models\User::factory()->create([
            'id' => (string) Str::uuid(),
            'name' => 'satz',
            'email' => 'satz@tecofize.com',
            'password' => Hash::make('password'),
        ]);
    }
}
