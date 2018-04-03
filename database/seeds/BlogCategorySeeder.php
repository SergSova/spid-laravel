<?php

use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keys = [
            'id',
            'title_ru',
            'title_uk',
            'icon',
            'slug',
            'isMain',
        ];
        $category = [
            [1, 'секс', 'секс', '/assets/img/blog/category-popup-icon/1.png', 'seks', 1,],
            [2, 'зож', 'зож', '/assets/img/blog/category-popup-icon/2.png', 'zozh', 1,],
            [3, 'наркотики', 'наркотики', '/assets/img/blog/category-popup-icon/3.png', 'narkotiki', 1,],
            [4, 'психология', 'психологія', '/assets/img/blog/category-popup-icon/4.png', 'psikhologiya', 1,],
            [5, 'саморазвитие', 'саморозвиток', '/assets/img/blog/category-popup-icon/5.png', 'samorazvitie', 1,],
            [6, 'фритайм', 'фрітайм', '/assets/img/blog/category-popup-icon/6.png', 'fritaym', 1,],
            [7, 'отношения', 'відносини', '/assets/img/blog/category-popup-icon/7.png', 'otnosheniya', 0,],
            [8, 'стиль', 'стиль', '/assets/img/blog/category-popup-icon/8.png', 'stil', 0,],
            [9, 'спорт', 'спорт', '/assets/img/blog/category-popup-icon/9.png', 'sport', 0,],
            [10, 'книги', 'книги', '/assets/img/blog/category-popup-icon/10.png', 'knigi', 0,],
            [11, 'музыка', 'музика', '/assets/img/blog/category-popup-icon/11.png', 'muzyka', 0,],
            [12, 'вич', 'вич', '/assets/img/blog/category-popup-icon/12.png', 'vich', 0,],
            [13, 'ипп', 'ІПП', '/assets/img/blog/category-popup-icon/13.png', 'ipp', 0,],
        ];

        $category = array_map(
            function ($el) use ($keys) {
                return array_combine($keys, $el);
            },
            $category
        );


        DB::table('blog_categories')->insert($category);
    }
}



