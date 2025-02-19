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
        Schema::table('ocene', function (Blueprint $table) {


            $table->unsignedBigInteger('new_user_id')->nullable();


            $table->foreign('new_user_id')
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

            //gg
            $table->dropForeign(['new_user_id']);
            $table->dropColumn('new_user_id');

        });
    }
};
