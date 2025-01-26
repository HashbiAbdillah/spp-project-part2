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
        Schema::table('pembayarans', function (Blueprint $table) {
            // Drop the existing foreign key if it exists
            $table->dropForeign(['id_spp']);
            
            // Add the new foreign key
            $table->foreign('id_spp')->references('id_spp')->on('siswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pembayarans', function (Blueprint $table) {
            // Drop the new foreign key
            $table->dropForeign(['id_spp']);
            
            // Restore the original foreign key
            $table->foreign('id_spp')->references('id_spp')->on('spps')->onDelete('cascade');
        });
    }
};