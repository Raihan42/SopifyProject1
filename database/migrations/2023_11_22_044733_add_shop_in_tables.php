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
        Schema::table('groups', function (Blueprint $table) {
            
            $table->unsignedBigInteger('shop_id');
        });
        Schema::table('faqs', function (Blueprint $table) {
            
            $table->unsignedBigInteger('shop_id');
        });
        Schema::table('products', function (Blueprint $table) {
            
            $table->unsignedBigInteger('shop_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('groups', function (Blueprint $table) {
            
            $table->droupColumn('shop_id');
        });
        Schema::table('faqs', function (Blueprint $table) {
            
            $table->droupColumn('shop_id');
        });
        Schema::table('products', function (Blueprint $table) {
            
            $table->droupColumn('shop_id');
        });
    }
};
