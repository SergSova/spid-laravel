<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterFaqAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE faq_answers ADD FULLTEXT faqsearch(question_ru, question_uk,answer_ru,answer_uk)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'faq_answers',
            function (Blueprint $table) {
                $table->dropIndex('faqsearch');
            }
        );
    }
}
