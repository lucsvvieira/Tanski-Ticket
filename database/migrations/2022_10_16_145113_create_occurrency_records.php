<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occurrency_records', function (Blueprint $table) {
            $table->id();
            $table->text('messages');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('occurrences_id');
            $table->foreign('occurrences_id')->references('id')->on('occurrency');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('occurrency_records', function (Blueprint $table) {
            $table->dropForeign([
                'user_id',
                'occurrences_id'
            ]);
        });
        
        Schema::dropIfExists('occurrency_records');
    }
};
