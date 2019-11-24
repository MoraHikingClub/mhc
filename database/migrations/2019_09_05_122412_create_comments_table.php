<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('comment');
            $table->boolean('approved')->default('0');
            $table->integer('post_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('comments', function($table){
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function($table){
            $table->dropForeign(['post_id']);
        });
        Schema::dropIfExists('comments');
    }
}
