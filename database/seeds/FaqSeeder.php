<?php

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
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
                'title'       => 'f.a.q.',
                'longtitle'   => 'часто задеваемые вопросы',
                'description' => '
                    <div>
                        FAQ позволит Вам  найти ответы на вопросы самостоятельно, без необходимости в создании тикета и ожидания отклика со стороны службы поддержки. Благодаря этому Вы  получите  мгновенное решение проблем.
                    </div>
                    <div>
                        FAQ позволит Вам  найти ответы на вопросы самостоятельно, без необходимости в создании тикета и ожидания отклика со стороны службы поддержки. 
                    </div>
                ',
                'page_index'  => 1,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'faq',
            ]
        );
    }
}
