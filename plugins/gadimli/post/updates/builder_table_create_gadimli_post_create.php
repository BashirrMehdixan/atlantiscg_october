<?php namespace Gadimli\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGadimliPostCreate extends Migration
{
    public function up()
    {
        Schema::create('gadimli_post_create', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('header');
            $table->string('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gadimli_post_create');
    }
}
