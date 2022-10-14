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
        Schema::create('occurrency_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('original_name');
            $table->string('extension');
            $table->string('size');
            $table->string('file_name');
            $table->unsignedBigInteger('occurrency_id');
            $table->foreign('occurrency_id')->references('id')->on('occurrency');
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
        Schema::dropIfExists('occurrency_attachments');
    }
};
