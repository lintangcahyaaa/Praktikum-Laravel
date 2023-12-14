<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
   * @return void 
    */

    public function up() {
    Schema::create('events', function(Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('location',255);
        $table->string('name',255);
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
