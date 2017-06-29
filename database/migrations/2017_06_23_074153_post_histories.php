<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostHistories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->longText('resume');
            $table->text('meta_description');
            $table->text('meta_robot');
            $table->text('seo');
            $table->text('media');
            $table->text('media_link');
            $table->text('image_title');
            $table->text('tag');
            $table->text('catégorie');
            $table->text('time');
            $table->boolean('delete');
            $table->integer('numero_article');
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
        Schema::dropIfExists('post_histories');

    }
}
