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
        Schema::table('registrations', function (Blueprint $table) {
            // Remove unique constraint from email
            $table->dropUnique(['email']);

            // Add registration code field
            $table->string('registration_code', 10)->unique()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            // Remove registration code field
            $table->dropColumn('registration_code');

            // Add back unique constraint to email
            $table->unique('email');
        });
    }
};
