<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('ProjectName');
            $table->longText('ProjectDescription');
            $table->string('ProjectDivisions');
            $table->string('ProjectDistricts');
            $table->string('ProjectUpazilas')->nullable();
            $table->integer('TotalCapacity');
            $table->integer('CurrentWorking');
            $table->json('AddUser');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
