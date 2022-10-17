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
        Schema::create('admission', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->integer('program_id');
            $table->string('adm_no');
            $table->string('academic_session');
            $table->integer('batch');
            $table->boolean('status')->default(false);
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->integer('deleted_id');
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
        Schema::dropIfExists('admission');
    }
};
