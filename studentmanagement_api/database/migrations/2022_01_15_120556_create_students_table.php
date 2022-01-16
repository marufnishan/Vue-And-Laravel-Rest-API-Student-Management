<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->mediumText('image')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('maritial_status')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('national_id')->nullable();
            $table->string('alternate_email')->nullable();
            $table->string('alternate_phone')->nullable();
            $table->string('personal_website')->nullable();
            $table->string('social_id')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_phn')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_income')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_phn')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_income')->nullable();
            $table->string('local_gurdian_name')->nullable();
            $table->string('local_gurdian_phn')->nullable();
            $table->string('local_gurdian_address')->nullable();
            $table->string('address')->nullable();
            $table->string('post_office')->nullable();
            $table->string('police_station')->nullable();
            $table->string('dictrict')->nullable();
            $table->string('division')->nullable();
            $table->string('country')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('per_address')->nullable();
            $table->string('per_post_office')->nullable();
            $table->string('per_police_station')->nullable();
            $table->string('per_dictrict')->nullable();
            $table->string('per_division')->nullable();
            $table->string('per_country')->nullable();
            $table->string('per_zip_code')->nullable();
            $table->string('degree')->nullable();
            $table->string('degree_name')->nullable();
            $table->string('university')->nullable();
            $table->string('board')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('class_devision')->nullable();
            $table->string('cgpa')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
