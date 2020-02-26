<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateResumesTableAddCityColumn extends Migration
{
    public function up()
    {
        Schema::table('resumes', function (Blueprint $table) {
            $table->string('city')->nullable()->after('location');
        });
    }

    public function down()
    {
        Schema::table('resumes', function (Blueprint $table) {
            $table->dropColumn('city');
        });
    }
}
