<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
//		DB::table( 'static_pages' )->insert(
//			[
//				'id'          => 10,
//				'title_ru'       => 'Блог',
//				'page_index'  => 10,
//				'published'   => 1,
//				'alias'       => 'blog',
//			]
//		);

        $this->call(BlogCategorySeeder::class);
        $this->call(BlogPostsSeeder::class);
	}
}
