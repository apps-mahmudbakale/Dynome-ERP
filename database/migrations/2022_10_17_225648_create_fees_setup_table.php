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
        Schema::create('fees_setup', function (Blueprint $table) {
            $table->id();
            $table->float('fee');
            $table->string('type');
            $table->string('description');
            $table->string('academic_session');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->string('deleted_by');
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
        Schema::dropIfExists('fees_setup');
    }
};
