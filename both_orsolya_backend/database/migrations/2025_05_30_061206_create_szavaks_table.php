<?php

use App\Models\Szavak;
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
        Schema::create('szavak', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->constrained('tema');
            $table->timestamps();
        });

        Szavak::create([
            'angol'=>'sister',
            'magyar'=>'nővér',
            'temaId'=>'1'
        ]);

        Szavak::create([
            'angol'=>'brother',
            'magyar'=>'fivér',
            'temaId'=>'1'
        ]);

        Szavak::create([
            'angol'=>'apple',
            'magyar'=>'alma',
            'temaId'=>'2'
        ]);

        Szavak::create([
            'angol'=>'water',
            'magyar'=>'víz',
            'temaId'=>'2'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavak');
    }
};
