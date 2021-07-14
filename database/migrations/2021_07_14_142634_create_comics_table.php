<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('collections', 100)->nullable();
            $table->text('description');
            $table->string('poster', 255);
            $table->decimal('price', 6, 2)->nullable();
            $table->tinyInteger('vote')->nullable();
            $table->date('publish')->nullable();
            $table->string('lenguages', 50)->nullable();
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
        Schema::dropIfExists('comics');
    }
}
