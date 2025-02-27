<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('presentations');
        Schema::create('presentations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->default(1);
            $table->integer('product_id')->nullable()->unsigned();
            $table->jsonb('packing');            
            $table->string('bar_cod', 15)->default('N/A');
            $table->boolean('status')->default(true);
            $table->string('photo_path')->default('');                                
            $table->integer('user_insert_id')->default(1);
            $table->integer('user_update_id')->default(1);           
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products');
            $table->unique(['company_id', 'product_id', 'packing']);
            $table->softDeletes();
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
    }
}
