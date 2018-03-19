<?php

use Illuminate\Database\Seeder;

class AidsSeeder extends Seeder
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
                'id'       => '2',
                'title'       => 'Путешествуй по миру, /открывай новые страны',
                'description' => '{"modal_text":"\u0438\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0439 \u0440\u043e\u0437\u043e\u0432\u0443\u044e \u0440\u0443\u043a\u0443, \/\u0447\u0442\u043e\u0431\u044b \u0441\u043d\u0438\u043c\u0430\u0442\u044c \u0448\u043b\u044f\u043f\u044b","modal_btn":"\u043e\u043a, \u044f\u0441\u043d\u043e-\u041f\u041e\u041d\u042f\u0422\u041d\u041e","modal_bottom":"\u043a\u043e\u0433\u0434\u0430 \u0437\u0430\u043a\u043e\u043d\u0447\u0438\u0448\u044c, \/\u0432\u043e\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0439\u0441\u044f \u0440\u0435\u0432\u043e\u043b\u044c\u0432\u0435\u0440\u043e\u043c  \/\u0447\u0442\u043e\u0431\u044b \u043f\u0435\u0440\u0435\u0439\u0442\u0438 \u0434\u0430\u043b\u044c\u0448\u0435"}',
                'page_index'  => 2,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'aids',
            ]
        );
    }
}
