<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $t1 = Tenant::create(['id' => '1', 'name' => 'tenant 1']);

        $t2 = Tenant::create(['id' => '2', 'name' => 'tenant 2']);

        $t3 = Tenant::create(['id' => '3', 'name' => 'tenant 3']);
    }
}
