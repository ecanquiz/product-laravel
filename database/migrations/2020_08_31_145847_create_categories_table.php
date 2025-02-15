<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
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
        
        $retult = DB::select("SELECT EXISTS (
            SELECT FROM information_schema.tables 
            WHERE  table_schema = 'public'
            AND    table_name   = 'view_categories'
         );")[0];

        if ($retult->exists){
          DB::unprepared("DROP VIEW public.view_categories;");
          
        }
        Schema::dropIfExists('categories');
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->default(1);
            $table->string('name',50);
            $table->integer('parent_id')->default(0);
            $table->boolean('final')->default(true);
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
        /*Schema::dropIfExists('presentations');
        Schema::dropIfExists('products');
        Schema::dropIfExists('marks');
        DB::unprepared("DROP VIEW public.view_categories;");
        Schema::dropIfExists('categories');
        */
    }
}
