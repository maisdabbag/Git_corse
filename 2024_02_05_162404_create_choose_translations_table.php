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
        Schema::create('choose_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('choose_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('desccription');

            $table->unique(['choose_id', 'locale']);
            $table->foreign('choose_id')->references('id')->on('chooses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choose_translations');
    }
};
