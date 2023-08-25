<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateUssdMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quickussd_menu_items', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('menu_id')->unsigned();
            $table->foreign('menu_id')
                ->references('id')
                ->on('quickussd_menus')
                ->onDelete('cascade');
            $table->string('description');
            $table->integer('type')->default(0);
            $table->integer('next_menu_id')->default(NULL);
            $table->integer('step');
            $table->string('confirmation_phrase');
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
        Schema::drop('quickussd_menu_items');
    }
}
