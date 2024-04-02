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
        Schema::create('date_schedule_events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('idevent');
            $table->integer('idvendor');
            $table->integer('iduser');
            $table->date('date');
            $table->string('schedule_title');
            $table->boolean('isDone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('date_schedule_events');
    }
};
