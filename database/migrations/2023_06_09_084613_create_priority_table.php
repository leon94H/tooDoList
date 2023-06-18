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
        Schema::create('priority', function (Blueprint $table) {
            $table->id();
            $table->string('low');
            $table->string('normal');
            $table->string('high');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
        Schema::dropIfExists('priority');

        
    }
};
