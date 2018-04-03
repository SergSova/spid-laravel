<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 22.03.2018
 * Time: 14:21
 */
class MapSeeder extends Seeder
{
    public function run()
    {
        DB::table('static_pages')->insert(
            [
                'id'          => '12',
                'title_ru'       => 'карта',
                'description_ru' => '{"City_ru":[{"title":"Киев","lat":"50.4296774","lng":"30.5121457","centers":[{"title":"Клиника дружественная к молодежи","dopInfo":"Быстрый тест 15 мин. В порядке живой очереди. Бесплатно. Анонимно. В клинике есть возможность посетить и других врачей, по предварительной записи (психолог, дерматолог, уролог, гинеколог)","info":"г. Одесса, ул. Софиевская, 10\r\n- телефон 048 7772076\r\nпн-пт 10:00-19:00","lat":"50.4484025","lng":"30.5126263"},{"title":"Кабинет «Доверие»","dopInfo":"Быстрый тест 15 мин, ИФА - 3 рабочих дня В порядке живой очереди. Бесплатно. Анонимно","info":"ул. Мясоедовская, 46 (центр «Открытые двери»)\r\n- телефон 048 7772076\r\nпн-пт 10:00-19:00","lat":"50.3984054","lng":"30.5099373"},{"title":"Кабинет «Доверие»","dopInfo":"Возможность получить бесплатные презервативы","info":"Бориспольская, 30А, в здании Поликлиники №2, кабинет  №217\r\nпн.–пт. с 9:30 до 15:00 с 11:15 до 13:45 уборка кабинета\r\nсб., вс. -  выходной.","lat":"50.4240524","lng":"30.6869444"},{"title":"Клиника дружественная к молодежи","dopInfo":"Быстрый тест 15 мин. В порядке живой очереди. Бесплатно. Анонимно. В клинике есть возможность посетить и других врачей, по предварительной записи (психолог, дерматолог, уролог, гинеколог)","info":"ул.Тростянецкая, 8Д\r\nпн-чт с 9:00 до 18:00\r\nпт. С 9:00 до 17:00\r\nсб., вс. -  выходной.\r\nТел.: +38 044 562 55 62","lat":"50.4147762","lng":"30.6541118"}]},{"title":"Харьков","lat":"49.9789176","lng":"36.3155829","centers":[{"title":"Харьковский областной благотворительный фонд «Парус»","dopInfo":"рекомендуем есть презервативы","info":"Харьков, проспект Московский, 140\/1, офисы 15-17\r\nпн-сб 14.00-19.00\r\n- телефон (057) 7646246","lat":"49.9675686","lng":"36.3072838"}]},{"title":"Славянск","lat":"48.8540331","lng":"37.5794216","centers":[{"title":"Славянськая городская общественная организация «Наша помощь»","dopInfo":"рекомендуем есть презервативы","info":"м. Славянск, Донецкая область, ул. Добровольского,2, этаж 5\r\nпн-пт 10:00-19:00\r\n- телефон 06262 2 14 52","lat":"48.851416","lng":"37.5956466"}]},{"title":"Полтава","lat":"49.6021346","lng":"34.4871991","centers":[{"title":"Благотворительная организация «Свет надежды»","dopInfo":"рекомендуем есть презервативы","info":"г. Полтава, ул. Симона Петлюры, 28А\r\nтелефон 0532606081\r\nпн-пт 10:00-19:00","lat":"49.5920639","lng":"34.5289257"}]},{"title":"Одесса","lat":"46.4826017","lng":"30.7340849","centers":[{"title":"Одесский благотворительный фонд “Дорога к Дому”","dopInfo":"рекомендуем есть презервативы","info":"г. Одесса, ул. Софиевская, 10\r\n- телефон 048 7772076\r\nпн-пт 10:00-19:00","lat":"46.491858","lng":"30.726372"},{"title":"Одесский благотворительный фонд “Дорога к Дому”","dopInfo":"рекомендуем есть презервативы","info":"ул. Мясоедовская, 46 (центр «Открытые двери»)\r\n- телефон 048 7772076\r\nпн-пт 10:00-19:00","lat":"46.4666296","lng":"30.725119"}]}]}',
                'page_index'  => 12,
                'published'   => 1,
                'alias'       => 'map',
            ]
        );
    }
}