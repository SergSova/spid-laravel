<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'posts',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->boolean('published')->default(1);
                $table->dateTime('publishedOn')->nullable();
                $table->string('mainImage')->nullable();
                $table->string('mainVideo')->nullable();
                $table->boolean('isBlackTitle')->default(0);
                $table->boolean('isVioletPostStyle')->default(0);
                $table->boolean('isBig')->default(0);
                $table->boolean('isVideo')->default(0);
                $table->text('content')->nullable();
                $table->text('description')->nullable();
                //slider - это JSON объект (path, alt, title)
                $table->text('slider')->nullable();
                $table->unsignedInteger('viewers')->default(0);
                $table->unsignedInteger('followers')->default(0);
                $table->string('author')->nullable();
                $table->string('authorImage')->nullable();
                $table->unsignedInteger('index')->default(0);
                $table->string('slug');

                $table->unsignedInteger('category_id')->nullable();
                $table->foreign('category_id')->references('id')->on('blog_categories')
                    ->onDelete('cascade');

                $table->unsignedInteger('seo_id')->nullable();
                $table->foreign('seo_id')->references('id')->on('seos')
                    ->onDelete('cascade');

                $table->softDeletes();
                $table->timestamps();
            }
        );


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
