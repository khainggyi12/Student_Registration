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
        Schema::create('student_registers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')
                    ->references('id')->on('programs')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('academic_year');
            $table->foreign('academic_year')
                    ->references('id')->on('academic_years')
                    ->onDelete('cascade');

            $table->string('name');
            $table->string('nrc');
            $table->date('dob');
            $table->string('email');
            $table->string('phone');
            $table->string('profile');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('race');
            $table->string('martial_status');
            $table->string('gender');

            $table->string('education');
            $table->string('school_name');
            $table->date('year');

            $table->string('degree');
            $table->string('university');
            $table->date('start_date');
            $table->date('end_date');

            $table->string('experience');
            $table->string('experience_year');     
            
            $table->string('current_position');
            $table->string('current_company');
            $table->date('company_startDate');  

            $table->string('previous_position');
            $table->string('previous_company');
            $table->date('previous_startDate');  
            $table->date('previous_endDate');

            $table->string('nrc_image');
            $table->string('graduation_certificate');
            $table->string('document');

            $table->string('description');
            
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
        Schema::dropIfExists('student_registers');
    }
};