<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // 解説
    public function up(): void
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->longText('commentary')->nullable(false); 
        });
    }

    public function down(): void
    {
        Schema::table('quizzes', function (Blueprint $table) {
            
        });
    }
};
