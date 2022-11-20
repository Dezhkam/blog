<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\CategoriesTableSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\PostsTableSeeder;
use Database\Seeders\UsersTableSeeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $this->call(CategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
