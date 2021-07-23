<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doc_id');
            $table->date('a_date');
            $table->time('a_time');
            $table->string('a_code');
            $table->boolean('status');
            $table->timestamps();

            $table->index('doc_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('special_lists');
    }
}
