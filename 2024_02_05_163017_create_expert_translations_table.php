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
        Schema::create('expert_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('expert_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->text('role');
            $table->text('content');

            $table->unique(['expert_id', 'locale']);
            $table->foreign('expert_id')->references('id')->on('experts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_translations');
    }
};
