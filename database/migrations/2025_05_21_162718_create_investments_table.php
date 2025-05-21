<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // investor
            $table->foreignId('application_id')->constrained()->onDelete('cascade');
            $table->decimal('amount_invested', 12, 2);
            $table->decimal('platform_fee', 12, 2); // calculated based on amount
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};
