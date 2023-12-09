<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TruncateAllTables;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TruncateAllTables::class);

        // \App\Models\User::factory(10)->create();
        $this->call([
            UsersSeeder::class,
        ]);
    }
}
