<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lunar\Base\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table($this->prefix.'collection_groups', function (Blueprint $table) {
            $table->dropIndex(['handle']);
        });

        Schema::table($this->prefix.'collection_groups', function (Blueprint $table) {
            $table->unique(['handle']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table($this->prefix.'collection_groups', function (Blueprint $table) {
            $table->dropUnique(['handle']);
        });

        Schema::table($this->prefix.'collection_groups', function (Blueprint $table) {
            $table->index(['handle']);
        });
    }
};