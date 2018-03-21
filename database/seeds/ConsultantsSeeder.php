<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultantsSeeder extends Seeder
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
                'id'          => 8,
                'title'       => 'кон/суль/та/ция',
                'longtitle'   => 'Как получить анонимную и бесплатную онлайн консультацию:',
                'description' => '<div>Анонимная консультация в чате Drugstore - это не бюро добрых советов и не магический шар предсказаний для принятий решений.</div><div>Анонимная консультация в чате Drugstore - это порция здравого смысла, проверенной информации и возможность критически оценить ситуацию, которая вас беспокоит - не называя своего имени, и не открывая лица.</div>',
                'page_index'  => 8,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'consultants',
            ]
        );
    }
}
