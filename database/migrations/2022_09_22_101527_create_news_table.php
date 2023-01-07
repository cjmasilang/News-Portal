<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('news_title');
            $table->string('slug');
            $table->integer('category_id')->unsigned();
            $table->string('image');
            $table->longText('news_content');
            $table->integer('view_count')->default(0);
            $table->integer('admin_id')->unsigned();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('news');
    }
};
