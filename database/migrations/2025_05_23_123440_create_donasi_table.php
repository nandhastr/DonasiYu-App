<?php
// database/migrations/xxxx_xx_xx_create_donasis_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('donasis', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->char('user_id', 36)->index();
            $table->decimal('nominal', 15, 2);
            $table->enum('methode', ['bank', 'cash', 'e-wallet'])->default('bank');
            $table->string('peristiwa')->nullable(); 
            $table->text('pesan')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donasis');
    }
};
