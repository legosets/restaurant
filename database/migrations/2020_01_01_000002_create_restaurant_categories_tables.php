<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateRestaurantCategoriesTables
 */
class CreateRestaurantCategoriesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('author')->nullable();
        });

        Schema::create('category_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'category', 'categories');
            $table->string('name');
            $table->longText('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_translations');
        Schema::dropIfExists('categories');
    }
}
