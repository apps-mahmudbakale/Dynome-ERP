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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('surname');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('email');
            $table->string('home_town');
            $table->string('address');
            $table->date('dob');
            $table->string('pob');
            $table->integer('country_id');
            $table->integer('state_id');
            $table->integer('lga_id');
            $table->string('marital_status');
            $table->string('religion');
            $table->string('academic_session');
            $table->integer('first_choice_program_id');
            $table->integer('second_choice_program_id');
            $table->string('picture_url');
            $table->string('app_type');
            $table->string('app_no');
            $table->integer('created_by');    
            $table->integer('updated_by');    
            $table->integer('deleted_by');    
            $table->integer('status');   
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
        Schema::dropIfExists('applications');
    }
};
