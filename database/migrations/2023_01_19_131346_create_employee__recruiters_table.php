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
        Schema::create('employee__recruiters', function (Blueprint $table) {
            $table->id();
            // The user_id from an employee
            $table->bigInteger('Eployee_Id');
            // The user_id from an recruiter
            $table->bigInteger('Recruiter_Id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee__recruiters');
    }
};
