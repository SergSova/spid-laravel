<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table( 'static_pages' )->insert(
			[
				'id'          => 10,
				'title'       => 'Блог',
				'description' => '',
				'page_index'  => 10,
				'menutitle'   => '',
				'published'   => 1,
				'alias'       => 'blog',
			]
		);
	}
}
