<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->mediumtext('titre');
            $table->string('auteur',50);
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on('categories');
            $table->longtext('extrait');
            $table->longtext('texte');
            $table->longtext('image_medium');
            $table->longtext('image_max');
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
        Schema::dropIfExists('articles');
    }
}
