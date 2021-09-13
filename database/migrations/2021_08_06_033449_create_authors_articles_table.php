<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsArticlesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_articles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index(); 
            $table->string('avatar');
            $table->string('date_of_birth',50);
            $table->text('biography');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('authors_articles');
    }



}
