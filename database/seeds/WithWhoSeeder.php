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
                'id'          => 5,
                'title'       => 'Выбери с кем /у тебя будет секс',
                'longtitle'   => '[{"title":"Андрей, 23","illness":"Вич (Спид)","images":"assets\/img\/with-who\/Andrey.png"},{"title":"Юля, 18 лет","illness":"Плоскостопие","images":"assets\/img\/with-who\/Julia.png"},{"title":"Даня, 16 лет","illness":"Герпес, гонорея","images":"assets\/img\/with-who\/Dany.png"},{"title":"Марго, 21 год","illness":"Гепатит С","images":"assets\/img\/with-who\/Margo.png"},{"title":"Настя, 15 лет","illness":"Хламидиоз, /Герпес","images":"assets\/img\/with-who\/Nastj.png"},{"title":"Саша, 17 лет","illness":"Косоглазие","images":"assets\/img\/with-who\/Sasha.png"},{"title":"Алиса, 19 лет","illness":"Вич (спид)","images":"assets\/img\/with-who\/Alisa.png"},{"title":"Игорь, 22 года","illness":"Трихомониаз /Хламидиоз","images":"assets\/img\/with-who\/Igor.png"}]',
                'description' => '{"modal_text":"воу, на этой вечеринке ты в центре внимания! /кому из них ответишь взаимностью?","modal_btn":"ок, ясно-ПОНЯТНО","pop_title":"А чего <span>ты</span> не знаешь о себе?","chk_1":"Сифилис","chk_2":"Герпес","chk_3":"Вич (спид)","chk_4":"Гонорея","chk_5":"Гепатит (b,с)","chk_6":"Хламидиоз"}',
                'page_index'  => 5,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'with-who',
            ]
        );
    }
}
