<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('category_id');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            // untuk menyimpan kapan postingan kita di publish
            // tipe data timestamp
            $table->timestamp('published_at')->nullable();
            // untuk postingan dibuat, bisa saja saat dibuat postingannya masih dalam bentuk "draf" belum di publish
            // method untuk membuat created_at & updated_at
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
        Schema::dropIfExists('posts');
    }
}
