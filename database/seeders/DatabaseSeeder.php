<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MataPelajaran;
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
        \App\Models\User::factory(1)->create();

        $this->call(RoleSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TahunAjaranSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(MataPelajaranSeeder::class);
    }
}
