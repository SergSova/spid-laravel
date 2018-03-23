<?php

use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_categories')->insert(
            [
                'title' => 'category 1',
                'icon'  => 'assets/img/blog/icon-filter/remont.png',
            ],
            [
                'title' => 'category 2',
                'icon'  => 'assets/img/blog/icon-filter/proizvot.png',
            ],
            [
                'title' => 'category 3',
                'icon'  => 'assets/img/blog/icon-filter/histori.png',
            ]
        );
    }
}
