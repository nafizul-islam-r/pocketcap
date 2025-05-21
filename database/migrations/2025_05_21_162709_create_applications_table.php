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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('business_name');
            $table->string('business_type'); // e.g., LLC, Corporation, etc.
            $table->text('business_description');
            $table->string('business_duration'); // e.g., 1 year, 2 years, etc.
            $table->string('business_location');
            $table->decimal('requested_amount', 12, 2);
            $table->decimal('equity_percentage', 5, 2);
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->enum('status', ['available', 'not_available'])->default('available');
            $table->timestamps();
        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
