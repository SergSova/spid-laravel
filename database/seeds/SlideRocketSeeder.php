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
                'title'       => 'Где припаркуется /твоя ракета сегодня',
                'description' => '{"modal_text":"\u0432\u044b\u0431\u0435\u0440\u0438 \u0441\u0430\u043c\u0443\u044e \u0441\u0438\u043c\u043f\u0430\u0442\u0438\u0447\u043d\u0443\u044e \u043f\u043b\u0430\u043d\u0435\u0442\u0443 \u0438 \/\u0432\u043e\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0439\u0441\u044f \u043f\u0440\u043e\u0431\u0435\u043b\u043e\u043c, \u0447\u0442\u043e\u0431\u044b \u0435\u0435 \u043f\u043e\u0441\u0435\u0442\u0438\u0442\u044c","modal_btn":"\u043e\u043a, \u044f\u0441\u043d\u043e-\u041f\u041e\u041d\u042f\u0422\u041d\u041e","text_bottom":"\u043d\u0430\u0436\u043c\u0438\u0442e \/\u043f\u0440\u043e\u0431\u0435\u043b \/\u0434\u043b\u044f \u0437\u0430\u043f\u0443\u0441\u043a\u0430 \u0440\u0430\u043a\u0435\u0442\u044b","wrong":"\u0411\u0415\u0417 \u041f\u0420\u0415\u0417\u0415\u0420\u0412\u0410\u0422\u0418\u0412\u0410 \/\u043f\u043e\u0441\u0430\u0434\u043a\u0430 \u043d\u0435\u0432\u043e\u0437\u043c\u043e\u0436\u043d\u0430"}',
                'page_index'  => 4,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'slide-rocket',
            ]
        );
    }
}
