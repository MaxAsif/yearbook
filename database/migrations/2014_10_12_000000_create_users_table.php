<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->text('course');
            $table->string('rollno')->unique();
            $table->string('name');
            $table->text('department');
            $table->text('dob');
            $table->text('password'); 
            // password column is added which later will store the bcrypt value of date        
            $table->text('email_insti');
            $table->text('email');
            $table->text('HOR');
            $table->text('phone');
            $table->text('view_self');
            $table->text('pro_pic');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
