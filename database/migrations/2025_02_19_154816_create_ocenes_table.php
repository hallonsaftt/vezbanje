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
        Schema::create('ocene', function (Blueprint $table) {
            $table->id();
            $table->string('predmet', 64);
            $table->unsignedInteger('ocena');
            $table->string('profesor', 64);
            // kol. user_id
            $table->unsignedBigInteger('user_id');
            $table->timestamps();


            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('ocene', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });


        Schema::dropIfExists('ocene');
    }
};
