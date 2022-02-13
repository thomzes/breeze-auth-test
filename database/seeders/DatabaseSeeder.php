<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Seller;
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
        \App\Models\Seller::factory(2)->create();
    }
}
