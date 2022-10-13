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
            $table->unsignedBigInteger('occurrency_record_id');
            $table->foreign('occurrency_record_id')->references('id')->on('OccurrencyRecord');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('Category');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('Department');
            $table->unsignedBigInteger('priorities_id');
            $table->foreign('priorities_id')->references('id')->on('Priority');
            $table->unsignedBigInteger('occurrency_status_id');
            $table->foreign('occurrency_status_id')->references('id')->on('OccurrencyStatus');
            $table->unsignedBigInteger('sla_id');
            $table->foreign('sla_id')->references('id')->on('Sla');
            $table->unsignedBigInteger('user_client_id');
            $table->foreign('user_client_id')->references('id')->on('User');
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
