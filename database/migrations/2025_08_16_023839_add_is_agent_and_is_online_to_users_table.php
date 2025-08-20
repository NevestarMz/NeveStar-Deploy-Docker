<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'is_agent')) {
                $table->boolean('is_agent')->default(false)->after('password');
            }
            if (!Schema::hasColumn('users', 'is_online')) {
                $table->boolean('is_online')->default(false)->after('is_agent');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'is_online')) {
                $table->dropColumn('is_online');
            }
            if (Schema::hasColumn('users', 'is_agent')) {
                $table->dropColumn('is_agent');
            }
        });
    }
};
