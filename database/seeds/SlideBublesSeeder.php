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
                'title'       => 'Выбери свою мечту',
                'description' => '{"modal_text":"\u043f\u043e\u043f\u0440\u043e\u0431\u0443\u0439 \u0441\u043b\u043e\u0432\u0438\u0442\u044c \u043c\u0435\u0447\u0442\u0443","modal_btn":"\u043e\u043a, \u044f\u0441\u043d\u043e-\u041f\u041e\u041d\u042f\u0422\u041d\u041e","wrong":"\u0427\u0442\u043e-\u0442\u043e \u043f\u043e\u0448\u043b\u043e \u043d\u0435 \u0442\u0430\u043a?!"}',
                'page_index'  => 3,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'slide-bubles',
            ]
        );
    }
}
