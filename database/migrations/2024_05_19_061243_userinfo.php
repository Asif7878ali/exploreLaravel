<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('userinfo', function(Blueprint $table ) {
                $table->id('User_ID');
                $table->string('Profile');
                $table->string('Name' ,50);
                $table->string('Email' , 50);
                $table->string('Contact');
                $table->string('Address');
                $table->string('Birtday');
                $table->string('Gender');
                $table->string('Course');
                $table->string('Password');
                $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('userinfo');
    }
};
