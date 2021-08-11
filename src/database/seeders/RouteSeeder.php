<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("routes")->insert([
            "path" => "./",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
