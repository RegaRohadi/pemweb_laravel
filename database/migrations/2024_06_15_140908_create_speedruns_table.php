<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
{
    Schema::create('speedruns', function (Blueprint $table) {
        $table->id();
        $table->string('player_name');
        $table->float('completion_time'); 
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('speedruns');
    }
};
