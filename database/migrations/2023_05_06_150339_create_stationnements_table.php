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
        Schema::create('stationnements', function (Blueprint $table) {
            $table->id('idS');
            $table->date('dateStat');
            $table->integer('nbUnit');
            $table->boolean('reserver')->default(false);
            $table->unsignedBigInteger('idUtilisateur');
            $table->unsignedBigInteger('idPark');
            $table->unsignedBigInteger('idType');
            $table->foreignId('utilisateurs_id');
            $table->foreignId('parking_id');
            $table->foreignId('types_tarifs_id');
                 
                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stationnements');
    }
};
