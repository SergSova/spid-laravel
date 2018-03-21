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
                'title'       => 'как ты рискнешь /сегодня?',
                'longtitle'   => '',
                'description' => '{"rotator1":"Под чем?","rotator2":"С кем?","rotator3":"Где?","rotator4":"Уровень/безопасности","rocket_btn":"сегодня не рискую","modal_text":"проверь свою удачу, /сыграй в рулетку","modal_btn":"ок, ясно-ПОНЯТНО","tumb_on_off":"ВКЛ/ВЫКЛ/голову"}',
                'page_index'  => 6,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'bandit',
            ]
        );
    }
}
/*{"modal_text":"\u043f\u0440\u043e\u0432\u0435\u0440\u044c \u0441\u0432\u043e\u044e \u0443\u0434\u0430\u0447\u0443, \/\u0441\u044b\u0433\u0440\u0430\u0439 \u0432 \u0440\u0443\u043b\u0435\u0442\u043a\u0443","modal_btn":"\u043e\u043a, \u044f\u0441\u043d\u043e-\u041f\u041e\u041d\u042f\u0422\u041d\u041e","tumb_on_off":"\u0412\u041a\u041b\/\u0412\u042b\u041a\u041b\/\u0433\u043e\u043b\u043e\u0432\u0443","rocket_btn":"\u0441\u0435\u0433\u043e\u0434\u043d\u044f \u043d\u0435 \u0440\u0438\u0441\u043a\u0443\u044e","rotator1":"\u041f\u043e\u0434 \u0447\u0435\u043c?","rotator2":"\u0421 \u043a\u0435\u043c?","rotator3":"\u0413\u0434\u0435?","rotator4":"\u0423\u0440\u043e\u0432\u0435\u043d\u044c \/\u0431\u0435\u0437\u043e\u043f\u0430\u0441\u043d\u043e\u0441\u0442\u0438"}*/