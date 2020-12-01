<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('book_name');
            $table->integer('books_number');
            $table->integer('pages_number');
            $table->integer('copies_number');
            $table->integer('total_pages_to_print');
            $table->integer('books_printed');
            $table->integer('covers_number');
            $table->integer('covers_printed');
            $table->float('spine');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
