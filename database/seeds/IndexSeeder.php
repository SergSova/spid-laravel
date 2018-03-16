<?php

use Illuminate\Database\Seeder;

class IndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('static_pages')->insert(
            [
                'title'       => 'Будь настойчивей',
                'longtitle'   => 'Нет презерватива / нет / секса',
                'description' => 'Скроль',
                'page_index'  => 1,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'index',
            ]
        );
    }
}
