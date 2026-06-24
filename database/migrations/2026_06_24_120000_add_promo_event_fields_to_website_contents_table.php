<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('website_contents', function (Blueprint $table) {
            $table->string('poster_path')->nullable()->after('isi');
            $table->boolean('is_active')->default(true)->after('poster_path');
        });
    }

    public function down(): void
    {
        Schema::table('website_contents', function (Blueprint $table) {
            $table->dropColumn([
                'poster_path',
                'is_active',
            ]);
        });
    }
};
