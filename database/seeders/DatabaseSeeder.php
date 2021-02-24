<?php

namespace Database\Seeders;

use App\Models\product;
use App\Models\setting;
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
        $this->call([userSeeder::class]);
        $this->call([seetingSeeder::class]);
         \App\Models\User::factory(10)->create();
         product::factory('10')->create();
    }
}
