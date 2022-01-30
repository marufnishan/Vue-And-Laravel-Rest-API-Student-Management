<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('subject')->nullable();
            $table->string('designation')->nullable();
            $table->string('salary')->nullable();
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
            $table->string('address')->nullable();
            $table->string('post_office')->nullable();
            $table->string('police_station')->nullable();
            $table->string('dictrict')->nullable();
            $table->string('division')->nullable();
            $table->string('country')->nullable();
            $table->string('zip_code')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
