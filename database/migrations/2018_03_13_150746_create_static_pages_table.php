<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaticPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'static_pages',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('longtitle')->nullable();
                $table->text('description')->nullable();
                $table->unsignedInteger('page_index')->default(0);
                $table->string('menutitle')->nullable();
                $table->boolean('published')->default(true);
                $table->string('alias')->unique();

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
        Schema::dropIfExists('static_pages');
    }
}
