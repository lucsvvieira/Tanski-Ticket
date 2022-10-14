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
            $table->foreign('occurrency_record_id')->references('id')->on('occurrency_records');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('priority_id');
            $table->foreign('priority_id')->references('id')->on('priorities');
            $table->unsignedBigInteger('occurrency_status_id');
            $table->foreign('occurrency_status_id')->references('id')->on('occurrency_status');
            $table->unsignedBigInteger('sla_id');
            $table->foreign('sla_id')->references('id')->on('sla');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::table('Occurrency', function (Blueprint $table) {
            $table->dropForeign([
                'user_id',
                'occurrency_record_id',
                'category_id',
                'department_id',
                'priorities_id',
                'occurrency_status_id',
                'sla_id',
                'client_id'  
            ]);
        });

        Schema::dropIfExists('occurrency');
    }
};
