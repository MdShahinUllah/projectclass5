<?php

namespace Database\Seeders;

use App\Models\setting;
use Illuminate\Database\Seeder;

class seetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        setting::create([
            'name'=>'skytheme',
            'email'=>'skytheme@gmail.com',
            'address'=>'chittagong,bangladesh',
            'phone'=>'01855566622',
        ]);
    }
}
