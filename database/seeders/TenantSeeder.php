<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $t1 = Tenant::create(['id'=>'1', 'name'=>'tenant 1']);
        $t1->domains()->create(['domain'=>'tenant1.localhost']);

        $t2 = Tenant::create(['id'=>'2', 'name'=>'tenant 2']);
        $t2->domains()->create(['domain'=>'tenant2.localhost']);

        $t3 = Tenant::create(['id'=>'3', 'name'=>'tenant 3']);
        $t3->domains()->create(['domain'=>'tenant3.localhost']);
    }
}
