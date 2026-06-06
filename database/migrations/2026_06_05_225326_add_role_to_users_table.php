<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
<<<<<<< HEAD:database/migrations/2026_06_05_225326_add_role_to_users_table.php
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('admin');
        });
=======
        if (!Schema::hasColumn('menus', 'kategori')) {
            Schema::table('menus', function (Blueprint $table) {
                $table->string('kategori')->nullable();
            });
        }
>>>>>>> eb04b772a8168911b2341919e7964a64bdfceb96:database/migrations/2026_05_29_230655_add_kategori_to_menus_table.php
    }

    public function down(): void
    {
<<<<<<< HEAD:database/migrations/2026_06_05_225326_add_role_to_users_table.php
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
=======
        if (Schema::hasColumn('menus', 'kategori')) {
            Schema::table('menus', function (Blueprint $table) {
                $table->dropColumn('kategori');
            });
        }
>>>>>>> eb04b772a8168911b2341919e7964a64bdfceb96:database/migrations/2026_05_29_230655_add_kategori_to_menus_table.php
    }
};