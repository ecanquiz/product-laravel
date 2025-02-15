<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('presentations');
        Schema::dropIfExists('products');
        Schema::dropIfExists('marks');
        Schema::create('marks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->default(1);
            $table->string('name', 50);
            $table->unique(['company_id', 'name']);
            $table->integer('producer_id')->default(1);
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
        Schema::dropIfExists('presentations');
        Schema::dropIfExists('products');
        Schema::dropIfExists('marks');        
    }
}
