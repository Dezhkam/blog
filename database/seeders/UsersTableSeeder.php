<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset the users table
        DB::Table('Users')->truncate();
        // Insert 3 new Usres/Author
        DB::Table('Users')->insert(
            [
                [
                    'name' => 'Rasool Dezhkam',
                    'email' => 'Dezhkam@yahoo.com',
                    'password' => bcrypt('secret')
                ],
                [
                    'name' => 'Aida Sharifi',
                    'email' => 'AidaSharifi@yahoo.com',
                    'password' => bcrypt('secret')
                ],
                [
                    'name' => 'Ali Sharifi',
                    'email' => 'AliSharifi@yahoo.com',
                    'password' => bcrypt('secret')
                ]
            ]
        );
    }
}
