<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CondomsWhiteSeeder extends Seeder
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
                'id'          => 7,
                'title'       => 'ва/жно /зна/ть',
                'longtitle'   => '',
                'description' => '{"Tabs":{"1":{"title":"\u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u044b:","menu_title":"\u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u044b","add_box1":"","add_box1_text":"","add_box2":"","add_box2_text":"","texts":{"1":{"index":"1","title":"\u041f\u0440\u043e\u0432\u0435\u0440\u044c\u0442\u0435 \u0441\u0440\u043e\u043a \u0433\u043e\u0434\u043d\u043e\u0441\u0442\u0438","text":"\u041f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u044b \u0441 \u0438\u0441\u0442\u0435\u043a\u0448\u0438\u043c \u0441\u0440\u043e\u043a\u043e\u043c \u0433\u043e\u0434\u043d\u043e\u0441\u0442\u0438 \u043c\u0435\u043d\u0435\u0435 \u043d\u0430\u0434\u0435\u0436\u043d\u044b \u0438 \u043c\u043e\u0433\u0443\u0442 \u043b\u0435\u0433\u043a\u043e \u0440\u0432\u0430\u0442\u044c\u0441\u044f."},"2":{"index":"2","title":"\u0423\u0431\u0435\u0434\u0438\u0442\u0435\u0441\u044c \u0432 \u0446\u0435\u043b\u043e\u0441\u0442\u043d\u043e\u0441\u0442\u0438 \u0443\u043f\u0430\u043a\u043e\u0432\u043a\u0438.","text":"\u041d\u0430 \u0443\u043f\u0430\u043a\u043e\u0432\u043a\u0435 \u043d\u0435 \u0434\u043e\u043b\u0436\u043d\u043e \u0431\u044b\u0442\u044c \u043d\u0438\u043a\u0430\u043a\u0438\u0445 \u043f\u043e\u0442\u0435\u0440\u0442\u043e\u0441\u0442\u0435\u0439 \u0438\u043b\u0438 \u0434\u044b\u0440."},"3":{"index":"3","title":"\u041f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u043e \u0445\u0440\u0430\u043d\u0438\u0442\u0435 \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u044b","text":"\u041d\u0435 \u0441\u0442\u043e\u0438\u0442 \u043a\u043b\u0430\u0441\u0442\u044c \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u044b \u0432 \u043a\u043e\u0448\u0435\u043b\u0435\u043a, \u043f\u043e\u0441\u043a\u043e\u043b\u044c\u043a\u0443 \u043e\u043d\u0438 \u043c\u043e\u0433\u0443\u0442 \u0434\u0435\u0444\u043e\u0440\u043c\u0438\u0440\u043e\u0432\u0430\u0442\u044c\u0441\u044f \u0438 \u043f\u043e\u0440\u0432\u0430\u0442\u044c\u0441\u044f. \u041d\u0435 \u0445\u0440\u0430\u043d\u0438\u0442\u0435 \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u044b \u0432 \u0431\u0430\u0440\u0434\u0430\u0447\u043a\u0435 \u0430\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u044f \u0438\u043b\u0438 \u0432 \u0437\u0430\u0434\u043d\u0435\u043c \u043a\u0430\u0440\u043c\u0430\u043d\u0435 \u0448\u0442\u0430\u043d\u043e\u0432. \u0422\u0430\u043c \u043e\u043d\u0438 \u043c\u043e\u0433\u0443\u0442 \u0438\u0441\u043f\u043e\u0440\u0442\u0438\u0442\u044c\u0441\u044f \u0438\u0437-\u0437\u0430 \u0432\u043e\u0437\u0434\u0435\u0439\u0441\u0442\u0432\u0438\u044f \u0436\u0430\u0440\u044b, \u0441\u0432\u0435\u0442\u0430 \u0438\u043b\u0438 \u043f\u043e\u0441\u0442\u043e\u044f\u043d\u043d\u043e\u0433\u043e \u0442\u0440\u0435\u043d\u0438\u044f."},"4":{"index":"4","title":"\u041d\u0435 \u043e\u0442\u043a\u0440\u044b\u0432\u0430\u0439\u0442\u0435 \u0443\u043f\u0430\u043a\u043e\u0432\u043a\u0443","text":"\u0441 \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u043e\u043c \u043f\u0440\u0438 \u043f\u043e\u043c\u043e\u0449\u0438 \u043d\u043e\u0436\u043d\u0438\u0446 \u0438\u043b\u0438 \u0437\u0443\u0431\u043e\u0432. \u0412\u0435\u0440\u043e\u044f\u0442\u043d\u043e, \u043a\u043e\u0433\u0434\u0430 \u043f\u0440\u0438\u0434\u0435\u0442 \u043e\u0442\u0432\u0435\u0442\u0441\u0442\u0432\u0435\u043d\u043d\u044b\u0439 \u043c\u043e\u043c\u0435\u043d\u0442, \u043e\u0442\u043a\u0440\u044b\u0432\u0430\u0442\u044c \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432 \u043f\u0440\u0438 \u043f\u043e\u043c\u043e\u0449\u0438 \u0437\u0443\u0431\u043e\u0432 \u043c\u043e\u0436\u0435\u0442 \u043f\u043e\u043a\u0430\u0437\u0430\u0442\u044c\u0441\u044f \u0443\u0434\u043e\u0431\u043d\u043e \u0438 \u043b\u043e\u0433\u0438\u0447\u043d\u043e, \u043d\u043e \u043f\u043e\u043c\u043d\u0438\u0442\u0435, \u0447\u0442\u043e \u0438\u0437-\u0437\u0430 \u044d\u0442\u043e\u0433\u043e \u043d\u0430 \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u0435 \u043c\u043e\u0433\u0443\u0442 \u043f\u043e\u044f\u0432\u0438\u0442\u044c\u0441\u044f \u043a\u0440\u043e\u0448\u0435\u0447\u043d\u044b\u0435 \u0440\u0430\u0437\u0440\u044b\u0432\u044b, \u043a\u043e\u0442\u043e\u0440\u044b\u0435 \u0432\u044b \u043c\u043e\u0436\u0435\u0442\u0435 \u043d\u0435 \u0437\u0430\u043c\u0435\u0442\u0438\u0442\u044c, \u043d\u0430\u0434\u0435\u0432\u0430\u044f \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432."},"5":{"index":"5","title":"\u041a\u043e\u043b\u044c\u0446\u0430, \u043f\u0438\u0440\u0441\u0438\u043d\u0433 \u0438 \u0434\u0430\u0436\u0435 \u043e\u0441\u0442\u0440\u044b\u0435 \u043d\u043e\u0433\u0442\u0438","text":"\u043c\u043e\u0433\u0443\u0442 \u043f\u043e\u0432\u0440\u0435\u0434\u0438\u0442\u044c \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432, \u043f\u043e\u044d\u0442\u043e\u043c\u0443 \u0435\u0441\u043b\u0438 \u0443 \u0432\u0430\u0441 \u0435\u0441\u0442\u044c \u043f\u043e\u0434\u043e\u0431\u043d\u044b\u0435 \u0430\u043a\u0441\u0435\u0441\u0441\u0443\u0430\u0440\u044b, \u043f\u0440\u0438 \u043d\u0430\u0434\u0435\u0432\u0430\u043d\u0438\u0438 \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u0430 \u0434\u0435\u0439\u0441\u0442\u0432\u0443\u0439\u0442\u0435 \u043e\u0441\u0442\u043e\u0440\u043e\u0436\u043d\u043e."},"6":{"index":"6","title":"\u041f\u0440\u0438 \u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u043e\u043c \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u043d\u0438\u0438","text":"\u0432\u043e \u0432\u0440\u0435\u043c\u044f \u043a\u0430\u0436\u0434\u043e\u0433\u043e \u0441\u0435\u043a\u0441\u0443\u0430\u043b\u044c\u043d\u043e\u0433\u043e \u043a\u043e\u043d\u0442\u0430\u043a\u0442\u0430 \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u044b \u043d\u0430\u0434\u0435\u0436\u043d\u043e \u0437\u0430\u0449\u0438\u0442\u044f\u0442 \u0432\u0430\u0441 \u043e\u0442 \u0412\u0418\u0427."}}},"2":{"title":"\u0433\u0435\u043f\u0430\u0442\u0438\u0442 \u0441 (\u043f\u0443\u0442\u0438 \u043f\u0435\u0440\u0435\u0434\u0430\u0447\u0438):","menu_title":"\u0433\u0435\u043f\u0430\u0442\u0438\u0442 c","add_box1":"\u0413\u0435\u043f\u0430\u0442\u0438\u0442 \u0421","add_box1_text":"\u0448\u0438\u0440\u043e\u043a\u043e \u0440\u0430\u0441\u043f\u0440\u043e\u0441\u0442\u0440\u0430\u043d\u0435\u043d\u043d\u043e\u0435 \u0438\u043d\u0444\u0435\u043a\u0446\u0438\u043e\u043d\u043d\u043e\u0435 \u0437\u0430\u0431\u043e\u043b\u0435\u0432\u0430\u043d\u0438\u0435, \u043f\u043e\u0440\u0430\u0436\u0430\u044e\u0449\u0438\u0435 \u043f\u0440\u0435\u0438\u043c\u0443\u0449\u0435\u0441\u0442\u0432\u0435\u043d\u043d\u043e \u043f\u0435\u0447\u0435\u043d\u044c. \u041e\u0441\u043d\u043e\u0432\u043d\u043e\u0439 \u043f\u0443\u0442\u044c \u043f\u0435\u0440\u0435\u0434\u0430\u0447\u0438 \u0413\u0435\u043f\u0430\u0442\u0438\u0442\u0430 \u0421 - \u0447\u0435\u0440\u0435\u0437 \u043a\u043e\u043d\u0442\u0430\u043a\u0442 \u0441 \u0438\u043d\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u043d\u043e\u0439 \u043a\u0440\u043e\u0432\u044c\u044e. \u0412\u0438\u0440\u0443\u0441 \u043c\u043e\u0436\u0435\u0442 \u0441\u043e\u0445\u0440\u0430\u043d\u044f\u0442\u044c\u0441\u044f \u0434\u043e 4-\u0445 \u0434\u043d\u0435\u0439 \u0432 \u0437\u0430\u0441\u043e\u0445\u0448\u0435\u043c \u043f\u044f\u0442\u043d\u0435 \u043a\u0440\u043e\u0432\u0438, \u043d\u0430 \u043b\u0435\u0437\u0432\u0438\u0438 \u0431\u0440\u0438\u0442\u0432\u044b \u0438\u043b\u0438 \u0434\u0440\u0443\u0433\u0438\u0445 \u0438\u043d\u0441\u0442\u0440\u0443\u043c\u0435\u043d\u0442\u0430\u0445, \u0432 \u0438\u0433\u043b\u0435 \u0438\u043b\u0438 \u00ab\u0441\u043b\u0435\u043f\u043e\u0439 \u0437\u043e\u043d\u0435\u00bb \u0448\u043f\u0440\u0438\u0446\u0430.","add_box2":"","add_box2_text":"","texts":{"1":{"index":"1","title":"\u041d\u0435\u0437\u0430\u0449\u0438\u0449\u0435\u043d\u043d\u044b\u0439 (\u0431\u0435\u0437 \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u0430) \u043f\u043e\u043b\u043e\u0432\u043e\u0439 \u043a\u043e\u043d\u0442\u0430\u043a\u0442.","text":""},"2":{"index":"2","title":"\u0421\u043e\u0432\u043c\u0435\u0441\u0442\u043d\u043e\u0435 \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u043d\u0438\u0435 \u0438\u0433\u043e\u043b\u043e\u043a, \u0448\u043f\u0440\u0438\u0446\u0435\u0432, \u0438\u043b\u0438 \u0434\u0440\u0443\u0433\u043e\u0433\u043e \u0438\u043d\u044a\u0435\u043a\u0446\u0438\u043e\u043d\u043d\u043e\u0433\u043e \u0438\u043d\u0441\u0442\u0440\u0443\u043c\u0435\u043d\u0442\u0430 (\u0438\u043d\u044a\u0435\u043a\u0446\u0438\u043e\u043d\u043d\u043e\u0435 \u0443\u043f\u043e\u0442\u0440\u0435\u0431\u043b\u0435\u043d\u0438\u0435 \u043d\u0430\u0440\u043a\u043e\u0442\u0438\u043a\u043e\u0432)","text":""},"3":{"index":"3","title":"\u041f\u0435\u0440\u0435\u043b\u0438\u0432\u0430\u043d\u0438\u0435 \u043a\u0440\u043e\u0432\u0438","text":""},"4":{"index":"4","title":"\u041d\u0435\u0434\u043e\u0441\u0442\u0430\u0442\u043e\u0447\u043d\u0430\u044f \u0441\u0442\u0435\u0440\u0438\u043b\u0438\u0437\u0430\u0446\u0438\u044f \u043c\u0435\u0434\u0438\u0446\u0438\u043d\u0441\u043a\u043e\u0433\u043e \u0438\u043d\u0441\u0442\u0440\u0443\u043c\u0435\u043d\u0442\u0430","text":""},"5":{"index":"5","title":"\u041c\u0430\u043d\u0438\u043f\u0443\u043b\u044f\u0446\u0438\u0438, \u043a\u043e\u0442\u043e\u0440\u044b\u0435 \u0441\u043e\u043f\u0440\u043e\u0432\u043e\u0436\u0434\u0430\u044e\u0442\u0441\u044f \u0432\u044b\u0434\u0435\u043b\u0435\u043d\u0438\u0435\u043c \u043a\u0440\u043e\u0432\u0438","text":""},"6":{"index":"6","title":"\u0412\u044b\u0441\u043e\u043a\u0438\u0439 \u0440\u0438\u0441\u043a \u0438\u043d\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u0438\u044f","text":"\u043c\u0430\u043d\u0438\u043a\u044e\u0440 \u0442\u0430\u0442\u0443\u0430\u0436, \u043f\u0435\u0440\u043c\u0430\u043d\u0435\u043d\u0442\u043d\u044b\u0439 \u043c\u0430\u043a\u0438\u044f\u0436, \u043f\u0438\u0440\u0441\u0438\u043d\u0433, \u0441\u0442\u043e\u043c\u0430\u0442\u043e\u043b\u043e\u0433\u0438\u0438, \u043f\u0430\u0440\u0438\u043a\u043c\u0430\u0445\u0435\u0440\u0441\u043a\u0438\u0435"}}},"3":{"title":"\u0432\u0438\u0447 (\u0441\u043f\u0438\u0434) \u043f\u0435\u0440\u0435\u0434\u0430\u0435\u0442\u0441\u044f:","menu_title":"\u0432\u0438\u0447(\u0441\u043f\u0438\u0434)","add_box1":"\u0412\u0418\u0427 (\u0412\u0438\u0440\u0443\u0441 \u0438\u043c\u043c\u0443\u043d\u043e\u0434\u0435\u0444\u0438\u0446\u0438\u0442\u0430 \u0447\u0435\u043b\u043e\u0432\u0435\u043a\u0430)","add_box1_text":"\u0412\u0418\u0427 (\u0412\u0438\u0440\u0443\u0441 \u0438\u043c\u043c\u0443\u043d\u043e\u0434\u0435\u0444\u0438\u0446\u0438\u0442\u0430 \u0447\u0435\u043b\u043e\u0432\u0435\u043a\u0430) \u043f\u0440\u043e\u043d\u0438\u043a\u0430\u0435\u0442 \u0432 \u043a\u043b\u0435\u0442\u043a\u0438 \u0438\u043c\u043c\u0443\u043d\u043d\u043e\u0439 \u0441\u0438\u0441\u0442\u0435\u043c\u044b \u0438 \u043f\u043e\u0434\u0430\u0432\u043b\u044f\u0435\u0442 \u0438\u043b\u0438 \u043d\u0430\u0440\u0443\u0448\u0430\u0435\u0442 \u0438\u0445 \u0444\u0443\u043d\u043a\u0446\u0438\u044e. \u041d\u0430 \u0440\u0430\u043d\u043d\u0438\u0445 \u0441\u0442\u0430\u0434\u0438\u044f\u0445 \u0438\u043d\u0444\u0435\u043a\u0446\u0438\u044f \u043f\u0440\u043e\u0442\u0435\u043a\u0430\u0435\u0442 \u0431\u0435\u0441\u0441\u0438\u043c\u043f\u0442\u043e\u043c\u043d\u043e. \u0418\u043d\u0444\u0438\u0446\u0438\u0440\u043e\u0432\u0430\u043d\u0438\u0435 \u0432\u0438\u0440\u0443\u0441\u043e\u043c \u043f\u0440\u0438\u0432\u043e\u0434\u0438\u0442 \u043a \u043f\u0440\u043e\u0433\u0440\u0435\u0441\u0441\u0438\u0440\u0443\u044e\u0449\u0435\u043c\u0443 \u0438\u0441\u0442\u043e\u0449\u0435\u043d\u0438\u044e \u0438\u043c\u043c\u0443\u043d\u043d\u043e\u0439 \u0441\u0438\u0441\u0442\u0435\u043c\u044b, \u0440\u0430\u0437\u0440\u0443\u0448\u0430\u044f \u0441\u043f\u043e\u0441\u043e\u0431\u043d\u043e\u0441\u0442\u044c \u043e\u0440\u0433\u0430\u043d\u0438\u0437\u043c\u0430 \u0434\u0430\u0432\u0430\u0442\u044c \u043e\u0442\u043f\u043e\u0440 \u0438\u043d\u0444\u0435\u043a\u0446\u0438\u044f\u043c \u0438 \u0431\u043e\u043b\u0435\u0437\u043d\u044f\u043c, \u0442\u043e \u0435\u0441\u0442\u044c \u043a \u00ab\u0438\u043c\u043c\u0443\u043d\u043e\u0434\u0435\u0444\u0438\u0446\u0438\u0442\u0443\u00bb.","add_box2":"\u0421\u041f\u0418\u0414 (\u0441\u0438\u043d\u0434\u0440\u043e\u043c \u043f\u0440\u0438\u043e\u0431\u0440\u0435\u0442\u0435\u043d\u043d\u043e\u0433\u043e \u0438\u043c\u043c\u0443\u043d\u043e\u0434\u0435\u0444\u0438\u0446\u0438\u0442\u0430)","add_box2_text":"\u043f\u043e\u0441\u043b\u0435\u0434\u043d\u044f\u044f \u0441\u0442\u0430\u0434\u0438\u044f \u0440\u0430\u0437\u0432\u0438\u0442\u0438\u044f \u0412\u0418\u0427-\u0438\u043d\u0444\u0435\u043a\u0446\u0438\u0438, \u043f\u0440\u0438 \u043a\u043e\u0442\u043e\u0440\u043e\u0439 \u0438\u043c\u043c\u0443\u043d\u043d\u0430\u044f \u0441\u0438\u0441\u0442\u0435\u043c\u0430 \u043d\u0435 \u0441\u043f\u0440\u0430\u0432\u043b\u044f\u0435\u0442\u0441\u044f \u0441 \u0438\u043d\u0444\u0435\u043a\u0446\u0438\u044f\u043c\u0438 \u0438 \u0440\u0430\u043a\u043e\u0432\u044b\u043c\u0438 \u0437\u0430\u0431\u043e\u043b\u0435\u0432\u0430\u043d\u0438\u044f\u043c\u0438.","texts":{"1":{"index":"1","title":"\u041d\u0435\u0437\u0430\u0449\u0438\u0449\u0435\u043d\u043d\u044b\u0439 (\u0431\u0435\u0437 \u043f\u0440\u0435\u0437\u0435\u0440\u0432\u0430\u0442\u0438\u0432\u0430) \u043f\u043e\u043b\u043e\u0432\u043e\u0439 \u043a\u043e\u043d\u0442\u0430\u043a\u0442","text":""},"2":{"index":"2","title":"\u0421\u043e\u0432\u043c\u0435\u0441\u0442\u043d\u043e\u0435 \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u043d\u0438\u0435 \u0438\u0433\u043e\u043b\u043e\u043a, \u0448\u043f\u0440\u0438\u0446\u0435\u0432,","text":"\u0438\u043b\u0438 \u0434\u0440\u0443\u0433\u043e\u0433\u043e \u0438\u043d\u044a\u0435\u043a\u0446\u0438\u043e\u043d\u043d\u043e\u0433\u043e \u0438\u043d\u0441\u0442\u0440\u0443\u043c\u0435\u043d\u0442\u0430 (\u0438\u043d\u044a\u0435\u043a\u0446\u0438\u043e\u043d\u043d\u043e\u0435 \u0443\u043f\u043e\u0442\u0440\u0435\u0431\u043b\u0435\u043d\u0438\u0435 \u043d\u0430\u0440\u043a\u043e\u0442\u0438\u043a\u043e\u0432)"},"3":{"index":"3","title":"\u041c\u0435\u0434\u0438\u0446\u0438\u043d\u0441\u043a\u0438\u0435 \u043c\u0430\u043d\u0438\u043f\u0443\u043b\u044f\u0446\u0438\u0438 (\u043e\u043f\u0435\u0440\u0430\u0446\u0438\u0438, \u043f\u0435\u0440\u0435\u043b\u0438\u0432\u0430\u043d\u0438\u0435 \u043a\u0440\u043e\u0432\u0438, \u0438\u043d\u044a\u0435\u043a\u0446\u0438\u0438 \u0438 \u0442.\u043f.)","text":""},"4":{"index":"4","title":"\u041e\u0442 \u0412\u0418\u0427-\u043f\u043e\u0437\u0438\u0442\u0438\u0432\u043d\u043e\u0439 \u043c\u0430\u0442\u0435\u0440\u0438 \u043a \u0440\u0435\u0431\u0435\u043d\u043a\u0443 \u0432\u043e \u0432\u0440\u0435\u043c\u044f \u0431\u0435\u0440\u0435\u043c\u0435\u043d\u043d\u043e\u0441\u0442\u0438, \u0440\u043e\u0434\u043e\u0432 \u0438\u043b\u0438 \u043a\u043e\u0440\u043c\u043b\u0435\u043d\u0438\u044f \u0433\u0440\u0443\u0434\u044c\u044e","text":""},"5":{"index":"5","title":"\u0418\u0441\u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u043d\u0438\u0435 \u043d\u0435\u0441\u0442\u0435\u0440\u0438\u043b\u044c\u043d\u043e\u0433\u043e \u0438\u043d\u0441\u0442\u0440\u0443\u043c\u0435\u043d\u0442\u0430 \u0434\u043b\u044f \u0442\u0430\u0442\u0443\u0438\u0440\u043e\u0432\u043e\u043a \u0438 \u043f\u0438\u0440\u0441\u0438\u043d\u0433\u0430.","text":""},"6":{"index":"6","title":"\u0412\u0418\u0427 \u043d\u0435 \u043f\u0435\u0440\u0435\u0434\u0430\u0435\u0442\u0441\u044f","text":"\u0447\u0435\u0440\u0435\u0437 \u0432\u043e\u0437\u0434\u0443\u0445, \u043f\u043e\u0446\u0435\u043b\u0443\u0438, \u0435\u0434\u0443, \u0443\u043a\u0443\u0441\u044b \u043d\u0430\u0441\u0435\u043a\u043e\u043c\u044b\u0445 \u043e\u0431\u0449\u0438\u0435 \u043f\u043e\u043b\u043e\u0442\u0435\u043d\u0446\u0430 \u0441\u043e\u0432\u043c\u0435\u0441\u0442\u043d\u043e\u0435 \u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u043d\u0438\u0435 \u0432\u0430\u043d\u043d\u043e\u0439, \u0431\u0430\u0441\u0441\u0435\u0439\u043d\u043e\u043c, \u0442\u0443\u0430\u043b\u0435\u0442\u043e\u043c, \u0434\u0443\u0448\u0435\u043c"}}}}}',
                'page_index'  => 7,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'condoms-white',
            ]
        );
    }
}
