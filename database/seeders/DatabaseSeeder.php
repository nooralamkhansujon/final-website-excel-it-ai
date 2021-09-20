<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Management;
use App\Models\Slider;
use App\Models\SoftwareTeam;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        // Admin::create([
        //     'name' => 'nooralam',
        //     'email' => 'fahimkhanmpi373950@gmail.com',
        //     'password' => bcrypt('testing321'),
        // ]);
        // User::create([
        //     'name' => 'user',
        //     'email' => 'fahimkhanmpi373950@gmail.com',
        //     'password' => bcrypt('testing321'),
        // ]);

        // SoftwareTeam::factory(10)->create();
        Management::factory(5)->create();
        // Slider::factory(10)->create();
    }
}