<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(5)->create()->each(function($user) {
            $user->news()->saveMany(\App\Models\News::factory(10)->make());
        });
    }
}
