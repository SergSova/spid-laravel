<?php

use Illuminate\Database\Seeder;

class WithWhoSeeder extends Seeder
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
                'id'          => 6,
                'title'       => 'Выбери с кем /у тебя будет секс',
                'description' => '{"modal_text":"воу, на этой вечеринке ты в центре внимания! /кому из них ответишь взаимностью?","modal_btn":"ок, ясно-ПОНЯТНО","pop_title":"А чего <span>ты</span> не знаешь о себе?"}',
                'page_index'  => 4,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'with-who',
            ]
        );
    }
}
