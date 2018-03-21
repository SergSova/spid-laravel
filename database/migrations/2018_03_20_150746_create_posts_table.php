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
                $table->text('longtitle')->nullable();
                $table->text('description')->nullable();
                $table->text('main_image')->nullable();
                $table->text('icon')->nullable();
                $table->unsignedInteger('viewers')->nullable();
                $table->unsignedInteger('page_index')->default(0);
                $table->string('menutitle')->nullable();
                $table->boolean('published')->default(true);
                $table->string('alias')->unique();
                $table->unsignedInteger('parent_id')->nullable();
	            $table->foreign('parent_id')->references('id')->on('static_pages')
	                  ->onDelete('cascade');

                $table->unsignedInteger('seo_id')->nullable();
                $table->foreign('seo_id')->references('id')->on('seos')
                    ->onDelete('cascade');
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
