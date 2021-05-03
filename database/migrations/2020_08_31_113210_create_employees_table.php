<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('careerobj');
            $table->string('job_title');
            $table->string('companyname');
            $table->string('workstart');
            $table->string('workend');
            $table->string('Job_levels');
            $table->string('instituename');
            $table->string('fromyear');
            $table->string('toyear');
            $table->string('userid');
            $table->string('qualification');
            $table->string('birthday');
            $table->string('birthplace');
            $table->string('phone');
            $table->string('nationality');
            $table->string('gender');
            $table->string('location');
            $table->string('cover_image');
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
        Schema::dropIfExists('employees');
    }
}
