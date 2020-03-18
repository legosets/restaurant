<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateRestaurantMenuItemsTables
 */
class CreateRestaurantMenuItemsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            \createDefaultTableFields($table);
            $table->string('name');
        });

        Schema::create('menu_item_revisions', function (Blueprint $table) {
            \createDefaultRevisionsTableFields($table, 'menu_item', 'menu_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_item_revisions');
        Schema::dropIfExists('menu_items');
    }
}
