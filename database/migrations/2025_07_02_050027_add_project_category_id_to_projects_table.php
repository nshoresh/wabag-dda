<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
           $table->foreignId('project_category_id')
              ->after('title') // adjust placement
              ->nullable()
              ->constrained()
              ->onDelete('set null');
        });
    }*/

    /**
     * Reverse the migrations.
     */
    /*public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }*/
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->foreignId('project_category_id')->nullable()->constrained()->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['project_category_id']);
            $table->dropColumn('project_category_id');
        });
    }

};
