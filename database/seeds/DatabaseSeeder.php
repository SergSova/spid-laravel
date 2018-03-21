<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(IndexSeeder::class);
        $this->call(AidsSeeder::class);
        $this->call(SlideBublesSeeder::class);
        $this->call(SlideRocketSeeder::class);
        $this->call(WithWhoSeeder::class);
        $this->call(BanditSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(CondomsWhiteSeeder::class);
        $this->call(ConsultantsSeeder::class);
        $this->call(TestPageSeeder::class);
        $this->call(BlogSeeder::class);

    }
}
