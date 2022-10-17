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
        Schema::create('deferment', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->date('from');
            $table->date('to');
            $table->string('academic_session');
            $table->integer('semester')->default(0);
            $table->text('description');
            $table->string('user_type');
            $table->boolean('status')->default(false);
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->integer('deleted_by');
            $table->softDeletes();
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
        Schema::dropIfExists('deferment');
    }
};
