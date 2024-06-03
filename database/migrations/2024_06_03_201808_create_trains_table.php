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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30);
            $table->string('departure station', 50);
            $table->string('arrival station', 50);
            $table->datetime('departure time');
            $table->datetime('arrival time')->nullable();
            $table->string('train code', 20);
            $table->tinyInteger('number of carriages')->unsigned()->nullable();  
            $table->tinyInteger('in time')->unsigned()->nullable();
            $table->tinyInteger('deleted')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
