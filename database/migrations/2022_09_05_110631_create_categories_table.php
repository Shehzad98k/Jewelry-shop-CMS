<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_group_id')->nullable();
            $table->foreignId('parent_id')->nullable();

            $table->string('name');
            $table->string('slug');
            $table->json('gjs_data')->nullable();

            $table->unsignedInteger('sort_order')->default(0);

            $table->string('is_published')->default(true);
            $table->string('is_popular')->default(false);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
