<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->string('full_name')->after('id');
            $table->string('company')->nullable()->after('full_name');
            $table->string('email')->after('company');
            $table->string('phone')->nullable()->after('email');
            $table->string('scope')->nullable()->after('phone');
            $table->string('approx_size')->nullable()->after('scope');
            $table->text('message')->nullable()->after('approx_size');
        });
    }

    public function down(): void
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->dropColumn([
                'full_name',
                'company',
                'email',
                'phone',
                'scope',
                'approx_size',
                'message',
            ]);
        });
    }
};