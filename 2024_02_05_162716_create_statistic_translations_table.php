<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('statistic_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('statistic_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->string('number');

            $table->unique(['statistic_id', 'locale']);
            $table->foreign('statistic_id')->references('id')->on('statistics')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistic_translations');
    }
};
