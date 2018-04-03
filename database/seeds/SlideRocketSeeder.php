<?php

use Illuminate\Database\Seeder;

class SlideRocketSeeder extends Seeder
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
                'id'       => '4',
                'title_ru'       => 'Где припаркуется /твоя ракета сегодня',
                'description_ru' => '{"modal_text_ru":"выбери самую симпатичную планету и \/воспользуйся пробелом, чтобы ее посетить","modal_btn_ru":"ок, ясно-ПОНЯТНО","text_bottom_ru":"нажмитe \/пробел \/для запуска ракеты","wrong_ru":"БЕЗ ПРЕЗЕРВАТИВА \/посадка невозможна"}',
                'page_index'  => 4,
                'published'   => 1,
                'alias'       => 'slide-rocket',
            ]
        );
    }
}
