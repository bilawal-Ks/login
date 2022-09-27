<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('signups', function (Blueprint $table) {
            $table->id();
            $table->string('Fname');
            $table->string('Lname');
            $table->string('email');
            $table->string('password');
            $table->string('Cpassword');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('signups');
    }
};
