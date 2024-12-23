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
    { Schema::create('bike_ledgers', function (Blueprint $table) {
        $table->id();
        $table->date('date');
        $table->enum('transaction_type', ['purchase', 'sale', 'maintenance']);
        $table->decimal('amount', 15, 2);
        $table->text('description')->nullable();
        $table->string('bike_model');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bike_ledgers');
    }
};
