<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePosts extends Migration
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
          $table->date('date');
          $table->string('title');
          $table->text('content');
          $table->string('status', 20);
          $table->string('type', 10);
          $table->text('tags');
          $table->integer('comment-count');
          $table->integer('like-count');
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
