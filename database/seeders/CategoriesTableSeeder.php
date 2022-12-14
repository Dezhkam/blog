<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('categories')->truncate();
        DB::Table('categories')->insert(
            [
                [
                    'title' => 'Web Design',
                    'slug' => 'web-design'
                ],
                [
                    'title' => 'Web Programming',
                    'slug' => 'web-programming'
                ],
                [
                    'title' => 'Internet',
                    'slug' => 'internet'
                ],
                [
                    'title' => 'Social Marketing',
                    'slug' => 'social-marketing'
                ],
                [
                    'title' => 'Photography',
                    'slug' => 'photography'
                ]
            ]
        );
        for ($i = 1; $i < 10; $i++) {
            DB::table('posts')->where('id',$i)->update(['category_id'=>rand(1,5)]);
        }
    }
}
