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
                'title_ru'       => 'Путешествуй по миру, /открывай новые страны',
                'description_ru' => '{"modal_text_ru":"используй розовую руку, \/чтобы снимать шляпы","modal_btn_ru":"ок, ясно-ПОНЯТНО","modal_bottom_ru":"когда закончишь, \/воспользуйся револьвером  \/чтобы перейти дальше"}',
                'page_index'  => 2,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'aids',
            ]
        );
    }
}
