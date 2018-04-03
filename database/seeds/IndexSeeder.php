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
                'id'          => '1',
                'title_ru'       => 'Будь настойчивей',
                'longtitle_ru'   => 'Нет презерватива / нет / секса',
                'description_ru' => 'Скроль',
                'page_index'  => 1,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'index',
            ]
        );
    }
}
