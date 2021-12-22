<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
    }
}
