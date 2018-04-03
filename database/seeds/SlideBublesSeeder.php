<?php

use Illuminate\Database\Seeder;

class SlideBublesSeeder extends Seeder
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
                'id'       => '3',
                'title_ru'       => 'Выбери свою мечту',
                'description_ru' => '{"modal_text_ru":"попробуй словить мечту","modal_btn_ru":"ок, ясно-ПОНЯТНО","wrong_ru":"Что-то пошло не так?!"}',
                'page_index'  => 3,
                'published'   => 1,
                'alias'       => 'slide-bubles',
            ]
        );
    }
}
