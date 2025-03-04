<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('tags', function (Blueprint $table)
        {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }
    public function foreignIdFor($model, $column = null)
    {
        Schema::create('job_tag', function (Blueprint $table) {
           $table->id();
           $table->foreignIdFor(\App\Models\Job::class, 'job_listing_id');
           $table->foreignIdFor(\App\Models\Job::class);
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
