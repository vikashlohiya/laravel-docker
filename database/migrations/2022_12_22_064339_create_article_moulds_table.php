<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleMouldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_moulds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('size_id');        
            $table->bigInteger('article_id');        
            $table->integer('mould_qty');        
            $table->string('club_size_id')->nullable();        
            $table->boolean('size_plugin')->comment('1=yes or 0=no')->nullable();      
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
        //Schema::dropIfExists('article_moulds');
    }
}
