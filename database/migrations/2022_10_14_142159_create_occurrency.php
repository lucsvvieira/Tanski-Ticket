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
        Schema::create('occurrency', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->dateTime('open_date');
            $table->dateTime('close_date');
            $table->date('attendanting_day');
            $table->string('opened_by');
            $table->string('attended_by');
            $table->string('priority');
            $table->string('attach_photos');
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
        Schema::dropIfExists('occurrency');
    }
};
