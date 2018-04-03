<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanditSeeder extends Seeder
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
                'title_ru'       => 'как ты рискнешь /сегодня?',
                'longtitle_ru'   => '',
                'description_ru' => '{"rotator1_ru":"Под чем?","rotator2_ru":"С кем?","rotator3_ru":"Где?","rotator4_ru":"Уровень/безопасности","rocket_btn_ru":"сегодня не рискую","modal_text_ru":"проверь свою удачу, /сыграй в рулетку","modal_btn_ru":"ок, ясно-ПОНЯТНО","tumb_on_off_ru":"ВКЛ/ВЫКЛ/голову"}',
                'page_index'  => 6,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'bandit',
            ]
        );
    }
}