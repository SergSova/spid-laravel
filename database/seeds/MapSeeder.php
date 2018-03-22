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
                'title'       => 'карта',
                'longtitle'   => '',
                'description' => '',
                'page_index'  => 12,
                'menutitle'   => '',
                'published'   => 1,
                'alias'       => 'map',
            ]
        );
    }
}