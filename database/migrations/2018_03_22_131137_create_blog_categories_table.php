<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ru');
            $table->string('title_uk')->nullable();
            $table->string('icon');
            $table->string('slug');
            $table->boolean('isMain');

            $table->unsignedInteger('seo_id_ru')->nullable();
            $table->foreign('seo_id_ru')->references('id')->on('seos')
                ->onDelete('set null');
            $table->unsignedInteger('seo_id_uk')->nullable();
            $table->foreign('seo_id_uk')->references('id')->on('seos')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_categories');
    }
}
