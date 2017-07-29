<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('links')) {
            Schema::create('links', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('author_id')->unsigned()->nullable();
                $table->foreign('author_id')->references('id')->on('users');
                $table->integer('type_id')->unsigned()->nullable();
                $table->foreign('type_id')->references('id')->on('types');
                $table->string('action_date');
                $table->string('name');
                $table->string('link');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
