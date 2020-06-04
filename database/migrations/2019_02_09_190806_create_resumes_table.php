<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('prior')->index()->nullable();
            $table->string('group');
            $table->string('title');
            $table->string('description');
            $table->string('skills')->nullable();
            $table->string('location')->nullable();
            $table->string('date')->nullable();
            $table->string('url')->nullable();
            $table->unsignedInteger('order');
            $table->boolean('active')->default(1);
            $table->boolean('visible')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resumes');
    }
}
