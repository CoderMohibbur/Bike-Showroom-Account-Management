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
        Schema::create('bank_ledgers', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->enum('transaction_type', ['deposit', 'withdrawal']);
            $table->decimal('amount', 10, 2);
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_ledgers');
    }
};
