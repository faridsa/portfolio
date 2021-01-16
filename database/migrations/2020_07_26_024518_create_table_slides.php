<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSlides extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'table_slides', 
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->string('legend')->nullable();
                $table->string('image_desktop')->nullable();
                $table->string('image_mobile')->nullable();
                $table->string('link')->nullable();
                $table->enum('target', array('_self', '_blank'))->nullable();
                $table->integer('order')->nullable()->unsigned();
                $table->integer('published')->nullable()->unsigned();
                $table->timestamps();
                $table->softDeletes();
                $table->index(['deleted_at']);
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_slides');
    }
}
