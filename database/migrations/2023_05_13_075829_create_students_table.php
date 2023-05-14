<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
{
    if (Schema::hasTable('students')) {
        return;
    }
    
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('studentid');
        $table->string('name');
        $table->string('course');
        $table->string('year');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('students');
    }
};
