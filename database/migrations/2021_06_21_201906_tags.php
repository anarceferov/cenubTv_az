<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cb_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('news_id');
            $table->string('color')->nullable();
            $table->string('url',1000)->nullable();
            $table->timestamps();

            $table->foreign('news_id')->references('id')->on('cb_news')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cb_tags');
    }
}
