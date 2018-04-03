<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 22.03.2018
 * Time: 14:21
 */
class AboutSeeder extends Seeder
{
    public function run()
    {
        DB::table('static_pages')->insert(
            [
                'id'          => '13',
                'title_ru'       => 'О нас',
                'longtitle_ru'   => 'О проекте',
                'description_ru' => '{"desc_title_ru":"О проекте","supported_ru":"при поддержке","description_ru":"<div class=\"content__text\">Есть в жизни нечто, что подтолкнуло нас открыть Drugstore - это удовольствия на грани риска. <br \/><br \/>Каждому новому поколению жизнь - как добрый дилер - предлагает всё, что человечество изобрело и синтезировало для получения удовольствий. <br \/><br \/>Каждому новому поколению жизнь - как опытная любовница - предлагает всё, что человечество испробовало для получения наслаждения.<\/div>\r\n<div class=\"content__text\">Drugstore - это &laquo;лайфхаки&raquo; о том, как получать от жизни удовольствия и наслаждения с умом. <br \/>Drugstore - это личные истории и статьи о молодости и сексуальности, удовольствиях и развлечениях, здорового образа жизни и саморазвитии, дружбе и любви. <br \/>Drugstore - это онлайн-тест и анонимные консультации в чате для оценки уровня личного риска для здоровья и жизни. <br \/>При поддержке EAJF<\/div>\r\n<div class=\"content__sign\">Получай удовольствие с умом,<br \/>команда Drugstore<\/div>","slider":[{"index":"0","path":"\/assets\/img\/about\/logo-slider-1.png"},{"index":"1","path":"\/assets\/img\/about\/logo-slider-2.png"},{"index":"2","path":"\/assets\/img\/about\/logo-slider-3.png"},{"index":"3","path":"\/assets\/img\/about\/logo-slider-4.png"},{"index":"4","path":"\/assets\/img\/about\/logo-slider-5.png"},{"index":"5","path":"\/assets\/img\/about\/logo-slider-5.png"},{"index":"6","path":"\/assets\/img\/about\/logo-slider-4.png"},{"index":"7","path":"\/assets\/img\/about\/logo-slider-3.png"},{"index":"8","path":"\/assets\/img\/about\/logo-slider-2.png"},{"index":"9","path":"\/assets\/img\/about\/logo-slider-1.png"}]}',
                'page_index'  => 13,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'about',
            ]
        );
    }
}