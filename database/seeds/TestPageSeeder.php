<?php
/**
 * Created by PhpStorm.
 * User: sergs
 * Date: 20.03.2018
 * Time: 13:11
 */

use Illuminate\Database\Seeder;

class TestPageSeeder extends Seeder
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
				'id'          => 9,
				'title'       => 'тест',
				'longtitle'   => 'Первый тест',
				'description' => '{"description":"<div>\u0422\u0443\u0442 \u0432\u0441\u0451 \u043f\u0440\u043e\u0441\u0442\u043e. \u041c\u043e\u0436\u043d\u043e \u043f\u0440\u043e\u0438\u0433\u043d\u043e\u0440\u0438\u0440\u043e\u0432\u0430\u0442\u044c, \u0430 \u043c\u043e\u0436\u043d\u043e \u043e\u0446\u0435\u043d\u0438\u0442\u044c \u0441\u0432\u043e\u0439 \u043b\u0438\u0447\u043d\u044b\u0439 \u0440\u0438\u0441\u043a \u0438\u043d\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u0442\u044c\u0441\u044f \u0412\u0418\u0427 - \u0432\u044b\u0431\u043e\u0440 \u0437\u0430 \u0442\u043e\u0431\u043e\u0439. \u041a\u0430\u0436\u0434\u043e\u0435 \u043d\u043e\u0432\u043e\u0435 \u043f\u043e\u043a\u043e\u043b\u0435\u043d\u0438\u0435 \u0443\u043c\u043d\u0435\u0435 \u0438 \u0441\u0432\u043e\u0431\u043e\u0434\u043d\u0435\u0435 \u043f\u0440\u0435\u0434\u044b\u0434\u0443\u0449\u0435\u0433\u043e, \u0430 \u043a\u0440\u0438\u0442\u0438\u0447\u0435\u0441\u043a\u043e\u0435 \u043c\u044b\u0448\u043b\u0435\u043d\u0438\u0435 - \u043e\u0434\u0438\u043d \u0438\u0437 \u0441\u0430\u043c\u044b\u0445 \u0432\u0430\u0436\u043d\u044b\u0445 \u043d\u0430\u0432\u044b\u043a\u043e\u0432 \u0432 \u043c\u0438\u0440\u0435 \u0431\u0443\u0434\u0443\u0449\u0435\u0433\u043e - \u0443\u0431\u0435\u0436\u0434\u0435\u043d\u0430 \u043a\u043e\u043c\u0430\u043d\u0434\u0430 Drugstore.<\/div><div>\u0427\u0442\u043e\u0431\u044b \u043e\u0446\u0435\u043d\u0438\u0442\u044c \u0441\u0432\u043e\u0439 \u043b\u0438\u0447\u043d\u044b\u0439 \u0440\u0438\u0441\u043a \u0438\u043d\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u0442\u044c\u0441\u044f \u0412\u0418\u0427, \u043d\u0435\u043e\u0431\u0445\u043e\u0434\u0438\u043c\u043e \u043f\u0440\u043e\u0439\u0442\u0438 \u043a\u043e\u0440\u043e\u0442\u043a\u0438\u0439 \u0442\u0435\u0441\u0442:<\/div>\r\n<ul class=\"list\">\r\n<li>\u043e\u0442\u0432\u0435\u0447\u0430\u0439 \u0431\u044b\u0441\u0442\u0440\u043e, \u043d\u0435 \u0437\u0430\u0434\u0443\u043c\u044b\u0432\u0430\u044f\u0441\u044c<\/li>\r\n<li>\u0441\u0442\u043e\u0438\u0442 \u043b\u0438 \u0433\u043e\u0432\u043e\u0440\u0438\u0442\u044c, \u0447\u0442\u043e \u043e\u0442\u0432\u0435\u0447\u0430\u0442\u044c \u043d\u0443\u0436\u043d\u043e \u0447\u0435\u0441\u0442\u043d\u043e<\/li>\r\n<li>\u0432\u044b\u0431\u0435\u0440\u0438 \u043d\u0430\u0438\u0431\u043e\u043b\u0435\u0435 \u0442\u043e\u0447\u043d\u044b\u0435 \u0438 \u043f\u043e\u0434\u0445\u043e\u0434\u044f\u0449\u0438\u0435 \u0434\u043b\u044f \u0442\u0435\u0431\u044f \u043e\u0442\u0432\u0435\u0442\u044b, \u0438 \u043d\u0430\u0436\u043c\u0438 \u00ab\u043f\u0440\u043e\u0434\u043e\u043b\u0436\u0438\u0442\u044c\u00bb<\/li>\r\n<\/ul>\r\n<div>\u041f\u043e\u043b\u0443\u0447\u0430\u0439 \u0443\u0434\u043e\u0432\u043e\u043b\u044c\u0441\u0442\u0432\u0438\u0435 \u0441 \u0443\u043c\u043e\u043c, <br> \u043a\u043e\u043c\u0430\u043d\u0434\u0430 Drugstore<\/div>","test_btn":"\u043f\u0440\u043e\u0439\u0442\u0438 \u0442\u0435\u0441\u0442","test_btn_next":"\u0434\u0430\u043b\u0435\u0435"}',
				'page_index'  => 9,
				'menutitle'   => '',
				'published'   => 1,
				'alias'       => 'aids-test',
			]
		);
	}
}