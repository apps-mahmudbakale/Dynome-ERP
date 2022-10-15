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
        Schema::create('olevel_details', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->integer('std_id');
            $table->integer('olevel_id');
            $table->integer('sitting');
            $table->string('school');
            $table->string('exam_no');
            $table->string('completed_at');
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
        Schema::dropIfExists('olevel_details');
    }
};
