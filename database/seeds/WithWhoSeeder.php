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
                'longtitle'   => '[{"title":"\u0410\u043d\u0434\u0440\u0435\u0439, 23","illness":"\u0412\u0438\u0447 (\u0421\u043f\u0438\u0434)","images":"assets\/img\/with-who\/Andrey.png"},{"title":"\u042e\u043b\u044f, 18 \u043b\u0435\u0442","illness":"\u041f\u043b\u043e\u0441\u043a\u043e\u0441\u0442\u043e\u043f\u0438\u0435","images":"assets\/img\/with-who\/Julia.png"},{"title":"\u0414\u0430\u043d\u044f, 16 \u043b\u0435\u0442","illness":"\u0413\u0435\u0440\u043f\u0435\u0441, \u0433\u043e\u043d\u043e\u0440\u0435\u044f","images":"assets\/img\/with-who\/Dany.png"},{"title":"\u041c\u0430\u0440\u0433\u043e, 21 \u0433\u043e\u0434","illness":"\u0413\u0435\u043f\u0430\u0442\u0438\u0442 \u0421","images":"assets\/img\/with-who\/Margo.png"},{"title":"\u041d\u0430\u0441\u0442\u044f, 15 \u043b\u0435\u0442","illness":"\u0425\u043b\u0430\u043c\u0438\u0434\u0438\u043e\u0437, \/\u0413\u0435\u0440\u043f\u0435\u0441","images":"assets\/img\/with-who\/Nastj.png"},{"title":"\u0421\u0430\u0448\u0430, 17 \u043b\u0435\u0442","illness":"\u041a\u043e\u0441\u043e\u0433\u043b\u0430\u0437\u0438\u0435","images":"assets\/img\/with-who\/Sasha.png"},{"title":"\u0410\u043b\u0438\u0441\u0430, 19 \u043b\u0435\u0442","illness":"\u0412\u0438\u0447 (\u0441\u043f\u0438\u0434)","images":"assets\/img\/with-who\/Alisa.png"},{"title":"\u0418\u0433\u043e\u0440\u044c, 22 \u0433\u043e\u0434\u0430","illness":"\u0422\u0440\u0438\u0445\u043e\u043c\u043e\u043d\u0438\u0430\u0437 \/\u0425\u043b\u0430\u043c\u0438\u0434\u0438\u043e\u0437","images":"assets\/img\/with-who\/Igor.png"}]',
                'description' => '{"modal_text":"воу, на этой вечеринке ты в центре внимания! /кому из них ответишь взаимностью?","modal_btn":"ок, ясно-ПОНЯТНО","pop_title":"А чего <span>ты</span> не знаешь о себе?"}',
                'page_index'  => 5,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'with-who',
            ]
        );
    }
}
