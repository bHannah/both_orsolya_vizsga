<?php

use App\Models\Tema;
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
        Schema::create('tema', function (Blueprint $table) {
            $table->id();
            $table->string('temanev');
            $table->timestamps();
        });

        Tema::create([
            'temanev'=>'család'
        ]);

        Tema::create([
            'temanev'=>'egészség'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tema');
    }
};
