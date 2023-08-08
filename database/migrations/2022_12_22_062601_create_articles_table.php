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
            $table->string('name');
            $table->string('type_of_pouring')->comment('it will be single or double or two_mould');
            $table->string('trolly1')->nullable();
            $table->string('trolly2')->nullable();
            $table->bigInteger('material_id1')->nullable();
            $table->bigInteger('material_id2')->nullable();
            $table->boolean('finish_work')->nullable()->comment('1=yes or 0=no');
            $table->boolean('spray')->nullable()->comment('1=yes or 0=no');
            $table->boolean('hand_paint')->nullable()->comment('1=yes or 0=no');
            $table->boolean('masking')->nullable()->comment('1=yes or 0=no');
            $table->string('material_extra')->nullable();
            $table->integer('number_of_step')->nullable();
            $table->bigInteger('created_by');            
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
        //Schema::dropIfExists('articles');
    }
}
